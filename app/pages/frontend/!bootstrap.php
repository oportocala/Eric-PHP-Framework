<?
if(!defined('BOOTSTRAP_LOADED')){
	$ds  = DIRECTORY_SEPARATOR;
	$tmp = explode($ds, dirname(__FILE__));
	$tmp = array_slice($tmp, 0, count($tmp)-2);
	$tmp = implode($ds, $tmp);
	include($tmp.$ds."includes".$ds."!bootstrap.php");
	}