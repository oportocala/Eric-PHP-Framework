<?
include("!bootstrap.php");

$r = new RoutesRedirect();
$r->old = 'fi18';
$r->new = 'local/fi18';
$r->type = '301';
$r->save();