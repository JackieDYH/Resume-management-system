<?php
	/**
	*www.04ie.com
	*���ߣ����ղ���
	*/
	session_start();
	error_reporting(0);
	header("content-type:text/html; charset=gb2312"); 
	define('XXCMS_ROOT', str_replace("\\", '/', substr(dirname(__FILE__), 0, -7)));
	$http_ref=isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
	set_include_path(XXCMS_ROOT.'lib/');
	require_once(XXCMS_ROOT."include/config.php");
	require_once("Mysql.Class.php");
	require_once("Page.Class.php");
	//ʵ�����ݿ����
	$db=new mysql($mydbhost,$mydbuser,$mydbpw,$mydbname,$conn,$mydbcharset);
?>