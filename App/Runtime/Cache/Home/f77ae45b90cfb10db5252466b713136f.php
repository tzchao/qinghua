<?php if (!defined('THINK_PATH')) exit();?><!-- 教师 -->
<!--技术支持：奇奇科技  www.qiqikeji.com --><!DOCTYPE html><html lang="zh-CN">
<head><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php if($title == 清化大学工业工程系): echo ($title); else: echo ($title); ?>-清化大学工业工程系<?php endif; ?></title>
<meta name="keywords" content="<?php if(empty($keywords)): ?>清化大学工业工程系<?php else: echo ($keywords); endif; ?>">
<meta name="description" content="<?php if(empty($description)): ?>清化大学工业工程系<?php else: echo ($keywords); endif; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="author" content="luffy! a web enthusiast" />
<link rel="shortcut icon" href="favicon.ico">
<link href="/Public/Home/qinghua/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/Home/qinghua/css/common.css" rel="stylesheet">
<link href="/Public/Home/qinghua/css/style.css" rel="stylesheet">
<script type="text/javascript" src="/Public/Home/qinghua/qh_js/jquery-1.11.3.min.js"></script>
 <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<header id="header" class="header">
    <div class="container">
        <h1 class="logo-head"><a href="http://www.web.com/qinghua"><img src="/qinghua/uploads/img1/20160614/575fc8707188b.png" alt="清化大学工业工程系" title="清化大学工业工程系" /></a></h1>
        <div class="headerR">
            <div class="headerR-top">
            	<?php
 $_id = intval(7); $where = array('aid'=> $_id, 'status' => 1); $limit = "1"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['starttime'] = array('lt', time()); $where['endtime'] = array('gt', time()); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; ?><a href="<?php echo ($abc["url"]); ?>" target='__blank' title="<?php echo ($abc["content"]); ?>" class="headerRimg headerRa4">&nbsp;</a><?php endforeach;?>
                <a href="#" class="headerRimg headerRa3" title="<?php echo L('_L_I_WX');?>">&nbsp;<?php
 $_id = intval(6); $where = array('aid'=> $_id, 'status' => 1); $limit = "1"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['starttime'] = array('lt', time()); $where['endtime'] = array('gt', time()); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; ?><img src="<?php echo ($abc["content"]); ?>" alt="清化大学工业工程系"><?php endforeach;?></a>
                <div class="headerbtn visible-xs-block" onclick="javascript:headerbtn();">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
                <div class="headerRcon">
                <?php
 $_id = intval(4); if (!empty($_id)) { if (0) { echo '<script type="text/javascript" src="'.U('Abc/shows', array('id' => $_id, 'flag' => 0)).'"></script>'; }else { echo get_abc($_id, 0); } } ?>
                    
                </div>
            </div>
            <div class="headerR-search">
            	<form id="SearchForm" name="SearchForm" method="post" action="/Search/index.html">
            		<input name="type" type="hidden" value="all" />
                	<input name="keyword" type="text" id="keyword"  value="<?php if(empty($keyword)): echo L('_L_PLEASE_KEY'); else: echo ($keyword); endif; ?>" onfocus="if(this.value=='<?php echo L('_L_PLEASE_KEY');?>'){this.value='';}" onblur="if(this.value==''){this.value='<?php echo L('_L_PLEASE_KEY');?>';}"/>
                	<button onclick="javascript:document.getElementById('SearchForm').submit();"></button>
                </form>
            </div>
        </div>
    </div>
</header>
<script>
	function headerbtn(){
		$(".collapse").slideToggle(); 
	}
</script>

<!-- 网站主题 -->
<section>
	<!-- 导航开始 -->
	<!-- 导航 -->
<nav class="navbar">
    <div class="container navbarbor">
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <li class="erji-li">
                  <a href="http://www.web.com/qinghua" <?php if(empty($cid)): ?>class="on"<?php endif; ?>><?php echo L('_L_WEBNAME');?></a>
                </li>
                <?php $pid = getTopCatid($cid); ?>
                <?php
 $_typeid = intval(0); $_type = "son"; $_temp = explode(',', "10"); $_temp[0] = $_temp[0] > 0? $_temp[0] : 10; if (isset($_temp[1]) && intval($_temp[1]) > 0) { $_limit[0] = $_temp[0]; $_limit[1] = intval($_temp[1]); }else { $_limit[0] = 0; $_limit[1] = $_temp[0]; } if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $__catlist = get_category(1); if (0) { $__catlist = Common\Lib\Category::getLevelOfModelId($__catlist, 0); } if (1 == 0) { $__catlist = Common\Lib\Category::clearPageAndLink($__catlist); } if($_typeid == 0 || $_type == 'top') { $_catlist = Common\Lib\Category::toLayer($__catlist); }else { if ($_type == 'self') { $_typeinfo = Common\Lib\Category::getSelf($__catlist, $_typeid ); $_catlist = Common\Lib\Category::toLayer($__catlist, 'child', $_typeinfo['pid']); }else { $_catlist = Common\Lib\Category::toLayer($__catlist, 'child', $_typeid); } } foreach($_catlist as $autoindex => $catlist): if($autoindex < $_limit[0]) continue; if($autoindex >= ($_limit[1]+$_limit[0])) break; $catlist['url'] = get_url($catlist); if(count($catlist['child'][0]['child']) == 0): ?><li class="erji-li">

	                		<a href="<?php if($catlist['id'] == 15): echo U('List/index',array('cid'=>'29')); elseif($catlist['id'] == 18): echo U('List/index',array('cid'=>'45')); else: echo ($catlist["url"]); endif; ?>" <?php if($pid == $catlist['id']): ?>class="on"<?php endif; ?> <?php if(($catlist["name"]) == "系友风采"): ?>target="__blank"<?php endif; ?>><?php echo ($catlist["name"]); ?></a>
	                			<?php if(count($catlist['child']) > 0): ?><div class="erji-box">
			                			<div class=""></div>
			                     		<div class="menu-sec">
				                			<?php if(is_array($catlist["child"])): $i = 0; $__LIST__ = $catlist["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo (get_url($v)); ?>"><?php echo ($v["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
			                			</div>
											<?php if(is_array($catlist["child"])): $k = 0; $__LIST__ = $catlist["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><div class="erjiDesc" style="display: <?php if(($k) == "1"): ?>block<?php else: ?>none<?php endif; ?>">
													<div class="desc">
														<p class="indent-2"><?php if(empty($v['description'])): echo L('_L_CATNODES'); else: echo (nl2br($v["description"])); endif; ?></p>
													</div>
													<div class="pic">
														<img src="<?php if(empty($v['catpic'])): ?>/Public/Home/qinghua/qh_images/nopic_len.png<?php else: echo ($v["catpic"]); endif; ?>" class="img-responsive" alt="">
													</div>
												</div><?php endforeach; endif; else: echo "" ;endif; ?>

									</div><?php endif; ?>
	                	</li>
	                <?php else: ?>
	                	<li class="erji-li sanji-li">
		                    <a href="<?php if($catlist['id'] == 7): echo U('List/index',array('cid'=>'8')); else: echo ($catlist["url"]); endif; ?>" <?php if($pid == $catlist['id']): ?>class="on"<?php endif; ?>><?php echo ($catlist["name"]); ?></a>
		                    <div class="erji-box">
		                    	<?php if(is_array($catlist["child"])): $i = 0; $__LIST__ = $catlist["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><dl>
			                        <dt><a href="<?php echo (get_url($v)); ?>"><?php echo ($v["name"]); ?></a></dt>
			                        	<?php if(is_array($v["child"])): $i = 0; $__LIST__ = $v["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo (get_url($v2)); ?>"><?php echo ($v2["name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
			                      </dl><?php endforeach; endif; else: echo "" ;endif; ?>
		                    </div>
		                </li><?php endif; endforeach;?>
                <div class="pull-right menua hidden-xs"><a href="http://glf.qiqikeji.com/qinghuaen/" class="eng">EN</a><a href="http://glf.qiqikeji.com/qinghua/"><?php echo L('_L_ZH');?></a></div>
            </ul>
        </div>
    </div>
</nav>
	<!-- 内页banner -->
	<div class="ny-banner">
		<?php
 $type = Common\Lib\Category::getSelf(get_category(0), $pid); $type['url'] = get_url($type); ?><img src="<?php if(empty($type['catpic'])): ?>/Public/Home/qinghua/qh_images/ny-banner1.jpg<?php else: echo ($type["catpic"]); endif; ?>" class="img-responsive" alt="">
	</div>
	<!-- 内容主体 -->
	<div class="ny-main container">
		<!--左侧栏-->
		<div class="menu-left">
	<?php
 $type = Common\Lib\Category::getSelf(get_category(0), $pid); $type['url'] = get_url($type); ?><div class="column-tit"><?php echo ($type["name"]); ?></div>
		<div class="box">
			<?php
 $_typeid = intval($pid); $_type = "son"; $_temp = explode(',', "10"); $_temp[0] = $_temp[0] > 0? $_temp[0] : 10; if (isset($_temp[1]) && intval($_temp[1]) > 0) { $_limit[0] = $_temp[0]; $_limit[1] = intval($_temp[1]); }else { $_limit[0] = 0; $_limit[1] = $_temp[0]; } if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $__catlist = get_category(1); if (0) { $__catlist = Common\Lib\Category::getLevelOfModelId($__catlist, 0); } if (1 == 0) { $__catlist = Common\Lib\Category::clearPageAndLink($__catlist); } if($_typeid == 0 || $_type == 'top') { $_catlist = Common\Lib\Category::toLayer($__catlist); }else { if ($_type == 'self') { $_typeinfo = Common\Lib\Category::getSelf($__catlist, $_typeid ); $_catlist = Common\Lib\Category::toLayer($__catlist, 'child', $_typeinfo['pid']); }else { $_catlist = Common\Lib\Category::toLayer($__catlist, 'child', $_typeid); } } foreach($_catlist as $autoindex => $catlist): if($autoindex < $_limit[0]) continue; if($autoindex >= ($_limit[1]+$_limit[0])) break; $catlist['url'] = get_url($catlist); if(count($catlist['child']) == 0): ?><div class="menu-li menu-erji">
						<span <?php if($catlist['id'] == $cid): ?>class="cur"<?php endif; ?>><i></i><a href="<?php echo ($catlist["url"]); ?>"><?php echo ($catlist["name"]); ?></a></span>
					</div>
				<?php else: ?>
					<div class="menu-li">
						<?php
 $type = Common\Lib\Category::getSelf(get_category(0), $cid); $type['url'] = get_url($type); ?><span class="<?php if(($type['pid']) == $catlist['id']): ?>cur<?php endif; ?>"><i></i><a href="javascript:;"><?php echo ($catlist["name"]); ?></a></span>
					        <ul style="display:<?php if(($type['pid']) == $catlist['id']): ?>block<?php endif; ?>">
					        	<?php if(is_array($catlist["child"])): $i = 0; $__LIST__ = $catlist["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="<?php if(($v['id']) == $cid): ?>curr<?php endif; ?>"><a href="<?php echo (get_url($v)); ?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					        </ul>
				    </div><?php endif; endforeach;?>
		</div>
	</div>
		<!-- 主体内容右侧 -->
		<div class="cont-right">
    <!--发展历程-->
    <div class="column-tit"><i></i><?php echo ($cate["name"]); ?>
    </div>
    <ul class="teacher">
    	<?php
 $_typeid = $cid; $_keyword = ""; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $_selfcate = Common\Lib\Category::getSelf(get_category(), $_typeid); $_tablename = strtolower($_selfcate['tablename']); $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array($_tablename.'.status' => 0,$_tablename.'.examine' => 0, $_tablename .'.cid'=> array('IN',$ids)); }else { $_tablename = 'article'; $where = array($_tablename.'.status' => 0, $_tablename.'.examine' => 0); } if ($_keyword != '') { $where[$_tablename.'.title'] = array('like','%'.$_keyword.'%'); } if (0 > 0) { $where['_string'] = $_tablename.'.flag & 0 = 0 '; } if (!empty($_tablename) && $_tablename != 'page') { if (0 > 0) { $count = D2('ArcView',"$_tablename")->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "100"; } $_list = D2('ArcView',"$_tablename")->field("id,title,color,zhiwu,zhicheng,yjfx,ename,jumpurl,cid,litpic")->nofield('content,pictureurls')->where($where)->order("listorder ASC,id DESC")->limit($limit)->select(); if (empty($_list)) { $_list = array(); } }else { $_list = array(); } foreach($_list as $autoindex => $list): $_jumpflag = ($list['flag'] & B_JUMP) == B_JUMP? true : false; $list['url'] = get_content_url($list['id'], $list['cid'], $list['ename'], $_jumpflag, $list['jumpurl']); if(0) $list['title'] = str2sub($list['title'], 0, 0); if(0) $list['description'] = str2sub($list['description'], 0, 0); ?><li>
	         <div class="box">
	           <a href="<?php echo ($list["url"]); ?>" class="trans-hover pic"><img src="<?php if(empty($list['litpic'])): ?>/Public/Home/qinghua/qh_images/nopic_z.png<?php else: echo ($list["litpic"]); endif; ?>" class="img-responsive trans" alt=""></a>
	           <div class="desc">
	             <h2 class="overhidden" title="<?php echo ($list["title"]); ?>" style="color:<?php echo ($list["color"]); ?>;cursor: pointer;" onclick="location.href='<?php echo ($list["url"]); ?>'"><?php echo ($list["title"]); ?></h2>
	             
	             <!-- <p class="overhidden" title="<?php echo ($list["zhiwu"]); ?>"><?php echo L('_L_ZHIWU');?>：<?php echo ($list["zhiwu"]); ?></p> -->
	             <!-- <p class="overhidden"><?php echo L('_L_YJFX');?>：<?php echo ($list["yjfx"]); ?></p> -->
	           </div>
	           <a href="<?php echo ($list["url"]); ?>" class="more"><?php echo L('_L_MOREDES');?>></a>
	         </div>
	       </li><?php endforeach;?>
       <?php if(count($list) == 0): ?><p class="indent-2"><?php echo L('_L_NOCONTENT');?></p><?php endif; ?>
     </ul>
  </div>
  <div class="clear"></div>

	</div>
</section>
<!-- 底部信息 -->
<div class="width marginTop50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 footerLeft">
                <ul>
                	<?php
 $_id = intval(5); if (!empty($_id)) { if (0) { echo '<script type="text/javascript" src="'.U('Abc/shows', array('id' => $_id, 'flag' => 0)).'"></script>'; }else { echo get_abc($_id, 0); } } ?>
                </ul>
            </div>
            <div class="col-md-6 footerRight">
                <div class="footerRightcon">
                    <div class="footerRight1">
                        清化大学工业工程系<br/><?php echo L('_L_I_LXDH');?>： 400-880-7651<br/><?php echo L('_L_I_FAX');?>：010-62794399<br/><?php echo L('_L_I_EMAIL');?>：zhcl@tsinghua.edu.cn<br/><?php echo L('_L_I_ADDRESS');?>：北京市海淀区上地十街辉煌国际大厦1号楼608室。
                    </div>
                    <?php
 $_id = intval(6); $where = array('aid'=> $_id, 'status' => 1); $limit = "1"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['starttime'] = array('lt', time()); $where['endtime'] = array('gt', time()); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; ?><div class="footerRight2"><img src="<?php echo ($abc["content"]); ?>" alt="清化大学工业工程系"/></div><?php endforeach;?>
                    <div class="footerRight3">
                    	<?php $i = 1; ?>
                    	<?php
 $_id = intval(7); $where = array('aid'=> $_id, 'status' => 1); $limit = "2"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['starttime'] = array('lt', time()); $where['endtime'] = array('gt', time()); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; ?><a href="<?php echo ($abc["url"]); ?>" title="<?php echo ($abc["content"]); ?>" target="__blank" class="footerRight3icon<?php echo ($i); ?>"></a>
                        	<?php $i++; endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="width footercon">
    <div class="container">
        Copyright © 2014-2016 QIQICMS. 奇奇科技 版权所有
    </div>
</div>
<!-- 统计代码 -->


<script type="text/javascript" src="/Public/Home/qinghua/qh_js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/Home/qinghua/qh_js/publicJS.js"></script>

<!-- QQ客服 -->

</body></html>