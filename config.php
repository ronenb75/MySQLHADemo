<?
define('user', 'appUser');
define('password', 'appUser');

$config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/config.JSON');
$config = json_decode($config, true);
?>
