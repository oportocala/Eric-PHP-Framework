<?
if(!defined('BOOTSTRAP_LOADED')){
	$ds  = DIRECTORY_SEPARATOR;
	$tmp = explode($ds, dirname(__FILE__));
	$tmp = array_slice($tmp, 0, count($tmp)-2);
	$tmp = implode($ds, $tmp);
	include($tmp.$ds."includes".$ds."!bootstrap.php");
	}

define('PAGE_TEMPLATES', PAGE_PATH."templates/");
define('ICON', WWW_ROOT.'icn/silk/');
require(CLASS_PATH."util/FLASH.php");
require(CLASS_PATH."util/SESSION.php");
require(LIB_PATH."internal/doctrine/Form/Doctrine_Form_Element.php");

$admin = new AdminUser();

$logged_in = $admin->login_check();
$userId = $logged_in;
if($logged_in){
	$admin = Doctrine_Core::getTable('AdminUser')->find($logged_in);
	}

$page = CURRENT_PAGE_URL;

if($_GET['logout'] == "true"){
	$admin->logout();
	header("Location: ".WWW_PAGE."login.php");
	exit;
	}

define('LAST_PAGE_CT_NAME', strtoupper(LAYOUT).'_LAST_PAGE');

if($logged_in && strstr($page, "login.php")){
	unset($_SESSION[LAST_PAGE_CT_NAME]);
	header("Location: ".WWW_PAGE."index.php");
	exit;
	}

if(!$logged_in && !strstr($page, "login.php")){
	$_SESSION[LAST_PAGE_CT_NAME] = $page;
	header("Location: ".WWW_PAGE."login.php");
	exit;
	}
