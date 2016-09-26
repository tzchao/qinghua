<?php
/**
 * ----------------------------------------------------
 * 自定义函数
 * $author luffy GUO$
 * $Id: zh-cn.php 2016-06-15 10:15 by luffy $
 * ----------------------------------------------------
 */

	/**
	 * 根据栏目ID获取顶级栏目ID
	 */
	function getTopCatid($catid = 1){
		$catid = intval($catid);
		if($catid == 0){
			return $catid;
		}
		$where['id'] = array('eq',$catid);
		$category = M('Category')->where($where)->field('pid')->find();
		if($category['pid'] != '0'){
			$category['pid'] =  getTopCatid($category['pid']);
		}
		else{
			$category['pid'] = $catid;
		}
		return $category['pid'];
	}

	/**
	 * 根据栏目ID获取上级栏目ID
	 */
	function getParentCatid($catid = 1){
		$catid = intval($catid);
		if($catid == 0){
			return $catid;
		}
		$where['id'] = array('eq',$catid);
		$category = M('Category')->where($where)->field('pid')->find();
		return $category['pid'];
	}
	
	
	/**
	 * 获取发展历程
	 */
	function getDevelList($cid){
		$where['status'] = array('neq','1');
		$where['cid'] = array('eq',$cid);
		$Devel = M('Article')->where($where)->field("CONCAT(FROM_UNIXTIME( publishtime,'%Y'),'+',id) as year,id,title,color,publishtime,flag")->group('year')->order('publishtime desc,id desc')->select();
		foreach ($Devel as $key => $v){
			$year = reset(explode('+', $v['year']));
			$data[$year][] = $v;
		}
		return $data;
	}
	
	
	/*
	 * 获得用户操作系统的换行符,\n
	 * @access public
	 * @return string
	 */
	function get_crlf()
	{
		if (stristr($_SERVER['HTTP_USER_AGENT'], 'Win'))
		{
			$the_crlf = '\r\n';
		}
		elseif (stristr($_SERVER['HTTP_USER_AGENT'], 'Mac'))
		{
			$the_crlf = '\r'; // for old MAC OS
		}
		else
		{
			$the_crlf = '\n';//权重大一点
		}
		return $the_crlf;
	}
	
	/*nl2br的反函数*/
	function br2nl($text){
		return preg_replace('/<br\\s*?\/??>/i','',$text);
	}
	
	
	/**
	 * 审核
	 */
	function examine($v,$array=array()){
		$status = array('审核通过','审核中','退稿');
		if(session('yang_adm_roleid') < 2){
			//具有审核的操作
			switch ($v){
				case '0':
					$str = $status[$v];
					break;
				case '1':
					$url0 = U('Article/examine',array('examine'=>'0','id'=>$array['id']));
					$url2 = U('Article/examine',array('examine'=>'2','id'=>$array['id']));
					$str = "<a href='javascript:;' onclick=\"toConfirm('$url0', '确实要审核通过吗？')\" >审核成功</a>";
					$str .= "<a href='javascript:;' onclick=\"toConfirm('$url2', '确实要退稿吗？')\" >退稿</a>";
					break;
				default:
					$str = $status[$v];
					break;
			}
			return $str;
		}
		else{
			//不具有审核的操作
			
			return $status[$v];
		}
	}
?>