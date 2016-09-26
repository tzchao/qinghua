<?php
namespace Common\LibTag;
use Think\Template\TagLib;

//自定义标签库
class Other extends TagLib {
	
	protected $tags = array(
		//自定义标签
		'devel'	=> array(
				'attr'	=>	'cid',
				'close' => 1,// close 是否闭合（0 或者1 默认为1，表示闭合）	
		),
		//通用列表
		'list'	=> array(
				'attr'	=> 'flag,typeid,titlelen,infolen,orderby,field,keyword,limit,pagesize,pageroll,pagetheme',
				'close'	=> 1,
		),
	);
	
	/*获取发展历程里的东西*/
	public function _devel($attr,$content){
		$cid = empty($attr['cid'])? 0 : trim($attr['cid']);
		$str = <<<str
<?php
		\$_cid = intval($cid);
		\$devel = getDevelList(\$_cid);
?>		
str;
		$str .= $content;
		return $str;
	}
	
	//标签名前加下划线
	//文章列表
	public function _list($attr, $content) {
		$flag = empty($attr['flag'])? '': $attr['flag'];
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? -1 : trim($attr['typeid']);//只接收一个栏目ID
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'publishtime DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];
		$keyword = empty($attr['keyword'])? '': trim($attr['keyword']);
	
		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%' : htmlspecialchars_decode($attr['pagetheme']);
		$field = empty($attr['field']) ? '' : $attr['field'];
	
		$flag = flag2sum($flag);
	
		$str = <<<str
<?php
	\$_typeid = $typeid;
	\$_keyword = "$keyword";
	if(\$_typeid == -1) \$_typeid = I('cid', 0, 'intval');
	if (\$_typeid>0 || substr(\$_typeid,0,1) == '$') {
	
		\$_selfcate = Common\Lib\Category::getSelf(get_category(), \$_typeid);
		\$_tablename = strtolower(\$_selfcate['tablename']);
		\$ids = Common\Lib\Category::getChildsId(get_category(), \$_typeid, true);
		//p(\$ids);
		\$where = array(\$_tablename.'.status' => 0,\$_tablename.'.examine' => 0, \$_tablename .'.cid'=> array('IN',\$ids));
	}else {
		\$_tablename = 'article';
		\$where = array(\$_tablename.'.status' => 0, \$_tablename.'.examine' => 0);
	
	}
	if (\$_keyword != '') {
		\$where[\$_tablename.'.title'] = array('like','%'.\$_keyword.'%');
	}
	
	
	if ($flag > 0) {
		\$where['_string'] = \$_tablename.'.flag & $flag = $flag ';
	}
	
	if (!empty(\$_tablename) && \$_tablename != 'page') {
	
		//分页
		if ($pagesize > 0) {
		
			//import('ORG.Util.Page');
		
			\$count = D2('ArcView',"\$_tablename")->where(\$where)->count();
	
			\$ename = I('e', '', 'htmlspecialchars,trim');
			if (!empty(\$ename) && C('URL_ROUTER_ON') == true) {
				\$param['p'] = I('p', 1, 'intval');
				\$param_action = '/'.\$ename;
			}else {
				\$param = array();
				\$param_action = '';
			}
	
			\$thisPage = new \Common\Lib\Page(\$count, $pagesize, \$param, \$param_action);
		
		
			//设置显示的页数
			\$thisPage->rollPage = $pageroll;
			\$thisPage->setConfig('theme',"$pagetheme");
			\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
			\$page = \$thisPage->show();
	
		}else {
			\$limit = "$limit";
		}
	
		\$_list = D2('ArcView',"\$_tablename")->field("$field")->nofield('pictureurls')->where(\$where)->order("$orderby")->limit(\$limit)->select();
		if (empty(\$_list)) {
			\$_list = array();
		}
	}else {
		\$_list = array();
	}
	
	
	//Load('extend');//调用msubstr()
	
	foreach(\$_list as \$autoindex => \$list):
	
	\$_jumpflag = (\$list['flag'] & B_JUMP) == B_JUMP? true : false;
	\$list['url'] = get_content_url(\$list['id'], \$list['cid'], \$list['ename'], \$_jumpflag, \$list['jumpurl']);
	if($titlelen) \$list['title'] = str2sub(\$list['title'], $titlelen, 0);
	if($infolen) \$list['description'] = str2sub(\$list['description'], $infolen, 0);
	
?>
str;
		$str .= $content;
		$str .='<?php endforeach;?>';
		return $str;
	
	}
	

}


?>