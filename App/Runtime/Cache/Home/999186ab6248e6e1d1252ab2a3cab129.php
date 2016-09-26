<?php if (!defined('THINK_PATH')) exit();?><!--技术支持：奇奇科技  www.qiqikeji.com --><!DOCTYPE html><html lang="zh-CN">
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
	<!-- 首页轮播 -->
	<!-- 轮播 -->
<script type="text/javascript" src="/Public/Home/qinghua/qh_js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/Public/Home/qinghua/qh_js/TouchSlide.1.1.js"></script>

<div class="lunbo hidden-xs" id="lunbo">
    <div class="lunboul">
        <ul>
        	<?php
 $_id = intval(1); $where = array('aid'=> $_id, 'status' => 1); $limit = "3"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['starttime'] = array('lt', time()); $where['endtime'] = array('gt', time()); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; ?><li><a href="<?php echo ($abc["url"]); ?>"><img src="<?php echo ($abc["content"]); ?>" alt="<?php echo ($abc["title"]); ?>"/></a></li><?php endforeach;?>
        </ul>
    </div>
    <span class="lunboLeft"></span>
    <span class="lunboRight"></span>
    <a class="pnBtn prev" href="javascript:void(0)"></a>
    <a class="pnBtn next" href="javascript:void(0)"></a>
</div>
<div class="lunbo1 visible-xs-block" id="lunbo1">
    <ul class="lunbouli1">
       <?php
 $_id = intval(1); $where = array('aid'=> $_id, 'status' => 1); $limit = "3"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['starttime'] = array('lt', time()); $where['endtime'] = array('gt', time()); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; ?><li><a href="<?php echo ($abc["url"]); ?>"><img src="<?php echo ($abc["content"]); ?>" alt="<?php echo ($abc["title"]); ?>"/></a></li><?php endforeach;?>
    </ul>
    <ul class="lunbolist1"></ul>
</div>
	<!-- 首页主题 -->
	<!-- 标题 -->
<div class="container marginTop50">
    <div class="title">
    	<?php
 $type = Common\Lib\Category::getSelf(get_category(0), 45); $type['url'] = get_url($type); ?><span></span><h2><?php echo ($type["name"]); ?></h2><i></i>
	        <a href="<?php echo ($type["url"]); ?>"><?php echo L('_L_MORE');?>>></a>
    </div>
</div>
<!-- 通知公告-内容 -->
<div class="container gonggao">
    <div class="row">
    	<?php
 $_typeid = 45; $_keyword = ""; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $_selfcate = Common\Lib\Category::getSelf(get_category(), $_typeid); $_tablename = strtolower($_selfcate['tablename']); $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array($_tablename.'.status' => 0,$_tablename.'.examine' => 0, $_tablename .'.cid'=> array('IN',$ids)); }else { $_tablename = 'article'; $where = array($_tablename.'.status' => 0, $_tablename.'.examine' => 0); } if ($_keyword != '') { $where[$_tablename.'.title'] = array('like','%'.$_keyword.'%'); } if (2 > 0) { $where['_string'] = $_tablename.'.flag & 2 = 2 '; } if (!empty($_tablename) && $_tablename != 'page') { if (0 > 0) { $count = D2('ArcView',"$_tablename")->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "3"; } $_list = D2('ArcView',"$_tablename")->field("id,title,color,zhiwu,ename,jumpurl,cid,publishtime")->nofield('content,pictureurls')->where($where)->order("publishtime DESC")->limit($limit)->select(); if (empty($_list)) { $_list = array(); } }else { $_list = array(); } foreach($_list as $autoindex => $list): $_jumpflag = ($list['flag'] & B_JUMP) == B_JUMP? true : false; $list['url'] = get_content_url($list['id'], $list['cid'], $list['ename'], $_jumpflag, $list['jumpurl']); if(0) $list['title'] = str2sub($list['title'], 0, 0); if(0) $list['description'] = str2sub($list['description'], 0, 0); ?><li class="col-md-4 col-sm-4">
	            <div class="gonggaoLeft">
	                <span><?php echo (date('M d',$list["publishtime"])); ?></span>
	                <p><?php echo (date('y',$list["publishtime"])); ?></p>
	            </div>
	            <a href="<?php echo ($list["url"]); ?>" class="gonggaoRight">
	                <div class="gonggaoRightcon">
	                    <div class="gonggaoRightcon1" style="color:<?php echo ($list["color"]); ?>" title="<?php echo ($list["title"]); ?>">
	                        <?php echo ($list["title"]); ?>
	                    </div>
	                </div>
	            </a>
	        </li><?php endforeach;?>
    </div>
</div>
<!-- 标题 -->
<div class="container marginTop50">
    <div class="title">
    	<?php
 $type = Common\Lib\Category::getSelf(get_category(0), 47); $type['url'] = get_url($type); ?><span></span><h2><?php echo ($type["name"]); ?></h2><i></i>
	        <a href="<?php echo ($type["url"]); ?>"><?php echo L('_L_MORE');?>>></a>
    </div>
</div>
<!-- 近期要闻 -->
<div class="container news">
    <div class="row">
        <div class="col-md-8 newsLeft">
            <ul class="row">
            <?php
 $_typeid = 47; $_keyword = ""; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $_selfcate = Common\Lib\Category::getSelf(get_category(), $_typeid); $_tablename = strtolower($_selfcate['tablename']); $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array($_tablename.'.status' => 0,$_tablename.'.examine' => 0, $_tablename .'.cid'=> array('IN',$ids)); }else { $_tablename = 'article'; $where = array($_tablename.'.status' => 0, $_tablename.'.examine' => 0); } if ($_keyword != '') { $where[$_tablename.'.title'] = array('like','%'.$_keyword.'%'); } if (9 > 0) { $where['_string'] = $_tablename.'.flag & 9 = 9 '; } if (!empty($_tablename) && $_tablename != 'page') { if (0 > 0) { $count = D2('ArcView',"$_tablename")->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "2"; } $_list = D2('ArcView',"$_tablename")->field("id,title,color,zhiwu,ename,jumpurl,cid,publishtime,litpic,description")->nofield('content,pictureurls')->where($where)->order("publishtime DESC")->limit($limit)->select(); if (empty($_list)) { $_list = array(); } }else { $_list = array(); } foreach($_list as $autoindex => $list): $_jumpflag = ($list['flag'] & B_JUMP) == B_JUMP? true : false; $list['url'] = get_content_url($list['id'], $list['cid'], $list['ename'], $_jumpflag, $list['jumpurl']); if(0) $list['title'] = str2sub($list['title'], 0, 0); if(0) $list['description'] = str2sub($list['description'], 0, 0); ?><li class="col-md-6 col-sm-6">
                    <a href="<?php echo ($list["url"]); ?>" class="newsLeftImg"><img src="<?php echo ($list["litpic"]); ?>" alt="<?php echo ($list["title"]); ?>" /></a>
                    <h3><a href="<?php echo ($list["url"]); ?>" style="color:<?php echo ($list["color"]); ?>" title="<?php echo ($list["title"]); ?>"><?php echo ($list["title"]); ?></a></h3>
                    <p title="<?php echo ($list["description"]); ?>" style="cursor: pointer" onclick="javascript:location.href='<?php echo ($list["url"]); ?>'"><?php if(empty($list['description'])): echo L('_L_CATNODES'); else: echo (nl2br($list["description"])); endif; ?><a href="<?php echo ($list["url"]); ?>">[ <?php echo L('_L_XQ');?> ]</a></p>
                </li><?php endforeach;?>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="newsRight">
            	<?php
 $_typeid = 47; $_keyword = ""; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $_selfcate = Common\Lib\Category::getSelf(get_category(), $_typeid); $_tablename = strtolower($_selfcate['tablename']); $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array($_tablename.'.status' => 0,$_tablename.'.examine' => 0, $_tablename .'.cid'=> array('IN',$ids)); }else { $_tablename = 'article'; $where = array($_tablename.'.status' => 0, $_tablename.'.examine' => 0); } if ($_keyword != '') { $where[$_tablename.'.title'] = array('like','%'.$_keyword.'%'); } if (2 > 0) { $where['_string'] = $_tablename.'.flag & 2 = 2 '; } if (!empty($_tablename) && $_tablename != 'page') { if (0 > 0) { $count = D2('ArcView',"$_tablename")->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "7"; } $_list = D2('ArcView',"$_tablename")->field("id,title,color,zhiwu,ename,jumpurl,cid,publishtime")->nofield('content,pictureurls')->where($where)->order("publishtime DESC")->limit($limit)->select(); if (empty($_list)) { $_list = array(); } }else { $_list = array(); } foreach($_list as $autoindex => $list): $_jumpflag = ($list['flag'] & B_JUMP) == B_JUMP? true : false; $list['url'] = get_content_url($list['id'], $list['cid'], $list['ename'], $_jumpflag, $list['jumpurl']); if(0) $list['title'] = str2sub($list['title'], 0, 0); if(0) $list['description'] = str2sub($list['description'], 0, 0); ?><li>
	                    <a href="<?php echo ($list["url"]); ?>">
	                        <span><?php echo (date('m/d',$list["publishtime"])); ?></span>
	                        <p title="<?php echo ($list["title"]); ?>"><?php echo ($list["title"]); ?></p>
	                    </a>
	                </li><?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
<!-- 标题 -->
<?php
 $type = Common\Lib\Category::getSelf(get_category(0), 7); $type['url'] = get_url($type); ?><div class="container marginTop50">
	    <div class="title">
	        <span></span><h2><?php echo ($type["name"]); ?></h2><i></i>
	        <a href="<?php echo ($type["url"]); ?>"><?php echo L('_L_MORE');?>>></a>
	    </div>
	</div>
<!-- 教育教学 -->
<div class="container marginTop50 jiaoyutabmar">
    <div class="row">
        <ul class="jiaoyutab col-md-12" role="tablist">
        	<?php $i = 1; ?>
        	<?php
 $_typeid = intval(7); $_type = "son"; $_temp = explode(',', "10"); $_temp[0] = $_temp[0] > 0? $_temp[0] : 10; if (isset($_temp[1]) && intval($_temp[1]) > 0) { $_limit[0] = $_temp[0]; $_limit[1] = intval($_temp[1]); }else { $_limit[0] = 0; $_limit[1] = $_temp[0]; } if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $__catlist = get_category(1); if (0) { $__catlist = Common\Lib\Category::getLevelOfModelId($__catlist, 0); } if (0 == 0) { $__catlist = Common\Lib\Category::clearPageAndLink($__catlist); } if($_typeid == 0 || $_type == 'top') { $_catlist = Common\Lib\Category::toLayer($__catlist); }else { if ($_type == 'self') { $_typeinfo = Common\Lib\Category::getSelf($__catlist, $_typeid ); $_catlist = Common\Lib\Category::toLayer($__catlist, 'child', $_typeinfo['pid']); }else { $_catlist = Common\Lib\Category::toLayer($__catlist, 'child', $_typeid); } } foreach($_catlist as $autoindex => $catlist): if($autoindex < $_limit[0]) continue; if($autoindex >= ($_limit[1]+$_limit[0])) break; $catlist['url'] = get_url($catlist); ?><li role="presentation" class="col-md-3 col-sm-3 col-xs-6 <?php if(($i) == "1"): ?>active<?php endif; ?>"><a href="#jyjs<?php echo ($i); ?>" aria-controls="benke" role="tab" data-toggle="tab"><?php echo ($catlist["name"]); ?></a></li>
            	<?php $i++; endforeach;?>
        </ul>
    </div>
    <div class="tab-content">
    
    	<?php $i = 1; ?>
        <?php
 $_typeid = intval(7); $_type = "son"; $_temp = explode(',', "10"); $_temp[0] = $_temp[0] > 0? $_temp[0] : 10; if (isset($_temp[1]) && intval($_temp[1]) > 0) { $_limit[0] = $_temp[0]; $_limit[1] = intval($_temp[1]); }else { $_limit[0] = 0; $_limit[1] = $_temp[0]; } if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $__catlist = get_category(1); if (0) { $__catlist = Common\Lib\Category::getLevelOfModelId($__catlist, 0); } if (0 == 0) { $__catlist = Common\Lib\Category::clearPageAndLink($__catlist); } if($_typeid == 0 || $_type == 'top') { $_catlist = Common\Lib\Category::toLayer($__catlist); }else { if ($_type == 'self') { $_typeinfo = Common\Lib\Category::getSelf($__catlist, $_typeid ); $_catlist = Common\Lib\Category::toLayer($__catlist, 'child', $_typeinfo['pid']); }else { $_catlist = Common\Lib\Category::toLayer($__catlist, 'child', $_typeid); } } foreach($_catlist as $autoindex => $catlist): if($autoindex < $_limit[0]) continue; if($autoindex >= ($_limit[1]+$_limit[0])) break; $catlist['url'] = get_url($catlist); ?><div role="tabpanel" class="tab-pane <?php if(($i) == "1"): ?>active<?php endif; ?>" id="jyjs<?php echo ($i); ?>">
            <div class="tabs">
                <div class="row">
					<?php
 $_typeid = $catlist['id']; $_keyword = ""; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $_selfcate = Common\Lib\Category::getSelf(get_category(), $_typeid); $_tablename = strtolower($_selfcate['tablename']); $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array($_tablename.'.status' => 0,$_tablename.'.examine' => 0, $_tablename .'.cid'=> array('IN',$ids)); }else { $_tablename = 'article'; $where = array($_tablename.'.status' => 0, $_tablename.'.examine' => 0); } if ($_keyword != '') { $where[$_tablename.'.title'] = array('like','%'.$_keyword.'%'); } if (8 > 0) { $where['_string'] = $_tablename.'.flag & 8 = 8 '; } if (!empty($_tablename) && $_tablename != 'page') { if (0 > 0) { $count = D2('ArcView',"$_tablename")->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "1"; } $_list = D2('ArcView',"$_tablename")->field("")->nofield('content,pictureurls')->where($where)->order("publishtime DESC")->limit($limit)->select(); if (empty($_list)) { $_list = array(); } }else { $_list = array(); } foreach($_list as $autoindex => $list): $_jumpflag = ($list['flag'] & B_JUMP) == B_JUMP? true : false; $list['url'] = get_content_url($list['id'], $list['cid'], $list['ename'], $_jumpflag, $list['jumpurl']); if(0) $list['title'] = str2sub($list['title'], 0, 0); if(0) $list['description'] = str2sub($list['description'], 0, 0); ?><div class="col-md-6 col-sm-6 tabsLeft">
	                        <a href="<?php echo ($list["url"]); ?>" title="<?php echo ($list["title"]); ?>" class="tabsLeftimg"><img src="<?php if(empty($list['litpic'])): ?>/Public/Home/qinghua/qh_images/nopic_in.png<?php else: echo ($list["litpic"]); endif; ?>" alt=""/></a>
	                        <p class='clamp row4 pointer' title="<?php echo ($list["title"]); ?>" onclick="javascript:location.href='<?php echo ($list["url"]); ?>'"><?php echo ($list["title"]); ?><br /><?php echo (nl2br($list["description"])); ?> </p>
	                    </div><?php endforeach;?>
                    <div class="col-md-6 col-sm-6">
                        <div class="tabsRight">
                            <strong onclick="location.href='<?php echo ($catlist["url"]); ?>'" style='cursor: pointer;'><?php echo ($catlist["name"]); ?></strong>
                            <div id="tabsRight<?php echo ($i); ?>" class="carousel slide">
                                <div class="carousel-inner" role="listbox">
                                    <ul class="item active">
                                    	<?php
 $_typeid = $catlist['id']; $_keyword = ""; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $_selfcate = Common\Lib\Category::getSelf(get_category(), $_typeid); $_tablename = strtolower($_selfcate['tablename']); $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array($_tablename.'.status' => 0,$_tablename.'.examine' => 0, $_tablename .'.cid'=> array('IN',$ids)); }else { $_tablename = 'article'; $where = array($_tablename.'.status' => 0, $_tablename.'.examine' => 0); } if ($_keyword != '') { $where[$_tablename.'.title'] = array('like','%'.$_keyword.'%'); } if (2 > 0) { $where['_string'] = $_tablename.'.flag & 2 = 2 '; } if (!empty($_tablename) && $_tablename != 'page') { if (0 > 0) { $count = D2('ArcView',"$_tablename")->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "0,6"; } $_list = D2('ArcView',"$_tablename")->field("")->nofield('content,pictureurls')->where($where)->order("publishtime DESC")->limit($limit)->select(); if (empty($_list)) { $_list = array(); } }else { $_list = array(); } foreach($_list as $autoindex => $list): $_jumpflag = ($list['flag'] & B_JUMP) == B_JUMP? true : false; $list['url'] = get_content_url($list['id'], $list['cid'], $list['ename'], $_jumpflag, $list['jumpurl']); if(0) $list['title'] = str2sub($list['title'], 0, 0); if(0) $list['description'] = str2sub($list['description'], 0, 0); ?><li>
	                                            <a href="<?php echo ($list["url"]); ?>" title="<?php echo ($list["title"]); ?>" style="color:<?php echo ($list["color"]); ?>"><span><?php echo (date('m/d',$list["publishtime"])); ?></span><p><?php echo ($list["title"]); ?></p></a>
	                                        </li><?php endforeach;?>
                                    </ul>
                                    <ul class="item">
                                    	<?php $n = 0; ?>
                                        <?php
 $_typeid = $catlist['id']; $_keyword = ""; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); if ($_typeid>0 || substr($_typeid,0,1) == '$') { $_selfcate = Common\Lib\Category::getSelf(get_category(), $_typeid); $_tablename = strtolower($_selfcate['tablename']); $ids = Common\Lib\Category::getChildsId(get_category(), $_typeid, true); $where = array($_tablename.'.status' => 0,$_tablename.'.examine' => 0, $_tablename .'.cid'=> array('IN',$ids)); }else { $_tablename = 'article'; $where = array($_tablename.'.status' => 0, $_tablename.'.examine' => 0); } if ($_keyword != '') { $where[$_tablename.'.title'] = array('like','%'.$_keyword.'%'); } if (2 > 0) { $where['_string'] = $_tablename.'.flag & 2 = 2 '; } if (!empty($_tablename) && $_tablename != 'page') { if (0 > 0) { $count = D2('ArcView',"$_tablename")->where($where)->count(); $ename = I('e', '', 'htmlspecialchars,trim'); if (!empty($ename) && C('URL_ROUTER_ON') == true) { $param['p'] = I('p', 1, 'intval'); $param_action = '/'.$ename; }else { $param = array(); $param_action = ''; } $thisPage = new \Common\Lib\Page($count, 0, $param, $param_action); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "6,6"; } $_list = D2('ArcView',"$_tablename")->field("")->nofield('content,pictureurls')->where($where)->order("publishtime DESC")->limit($limit)->select(); if (empty($_list)) { $_list = array(); } }else { $_list = array(); } foreach($_list as $autoindex => $list): $_jumpflag = ($list['flag'] & B_JUMP) == B_JUMP? true : false; $list['url'] = get_content_url($list['id'], $list['cid'], $list['ename'], $_jumpflag, $list['jumpurl']); if(0) $list['title'] = str2sub($list['title'], 0, 0); if(0) $list['description'] = str2sub($list['description'], 0, 0); $n++; ?>
	                                        <li>
	                                            <a href="<?php echo ($list["url"]); ?>" title="<?php echo ($list["title"]); ?>" style="color:<?php echo ($list["color"]); ?>"><span><?php echo (date('m/d',$list["publishtime"])); ?></span><p><?php echo ($list["title"]); ?></p></a>
	                                        </li><?php endforeach;?>
                                    </ul>
                                </div>
                                <div class="tabRightcon">
                                	<?php if(($n) != ""): ?><a class="left" href="#tabsRight<?php echo ($i); ?>" role="button" data-slide="prev"><</a>
	                                    <a class="right" href="#tabsRight<?php echo ($i); ?>" role="button" data-slide="next">></a><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i++; endforeach;?>

    </div>
</div>
<div class="container marginTop50 jiaoyumar">
    <div class="jiaoyu">
        <ul class="row">
        	<?php
 $_id = intval(2); $where = array('aid'=> $_id, 'status' => 1); $limit = "1"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['starttime'] = array('lt', time()); $where['endtime'] = array('gt', time()); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; $fo = explode(',',$abc['content']); ?>
        		<?php if(is_array($fo)): $i = 0; $__LIST__ = $fo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; $type = Common\Lib\Category::getSelf(get_category(0), $v); $type['url'] = get_url($type); ?><li class="col-md-4 col-sm-4 col-xs-12">
		                <div class="jiaoyuli">
		                    <a href="<?php echo ($type["url"]); ?>" class="jiaoyulia">
		                        <img src="<?php if(empty($type['catpic'])): ?>/Public/Home/qinghua/qh_images/nopic_len.png<?php else: echo ($type["catpic"]); endif; ?>" alt="<?php echo ($type["name"]); ?>"/>
		                        <h3 class="overhidden"><?php echo ($type["name"]); ?></h3>
		                    </a>
		                    <p class="clamp row3" onclick="location.href='<?php echo ($type["url"]); ?>'" title="<?php echo ($type["description"]); ?>" style="cursor: pointer;"><?php if(empty($type['description'])): echo L('_L_CATNODES'); else: echo ($type["description"]); endif; ?></p>
		                    <a href="<?php echo ($type["url"]); ?>" class="jiaoyulimore"><?php echo L('_L_LJMORE');?>>></a>
		                </div>
		            </li><?php endforeach; endif; else: echo "" ;endif; endforeach;?>
        </ul>
    </div>
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
<script type="text/javascript">
    setTimeout(function(){
        jQuery(".lunbo .lunboul li").first().before( jQuery(".lunbo .lunboul li").last() );
        jQuery(document).ready(function(){ jQuery(this).find(".arrow").stop(true,true).fadeIn(300) },function(){ jQuery(this).find(".arrow").fadeOut(300) });
        jQuery(".lunbo").slide({ titCell:".lunbolist ul",mainCell:".lunboul ul",effect:"leftLoop",autoPlay:true,vis:3,autoPage:true, trigger:"click",delayTime:600,interTime:3500});
    },100);
    /* 轮播广告 */
    TouchSlide({ slideCell:"#lunbo1", titCell:".lunbolist1", mainCell:".lunbouli1", effect:"leftLoop", delayTime:1000, interTime:3500, autoPage:true, autoPlay:true});
</script>