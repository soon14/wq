<?php
/**
 * 模块微站定义
 *
 * @author wujinxin
 * @url http://bbs.we7.cc/
 **/
defined('IN_IA') or exit('Access Denied');

global $_W, $_GPC;

$urlt = $this->createWebUrl('servic');

$post = $this->createWebUrl('service_list');
header ( "location:$post" );
exit();
?>