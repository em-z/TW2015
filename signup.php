<?php
include "resources/strings.php";
header("Content-Type: text/html;charset=utf-8");
session_start();
$_SESSION['login'] = NULL;

if (!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['nickname']) || !isset($_POST['browser_ver']))
	die ($Strings_EN['err_string_null'] . "");
$username = $_POST['username'];
$password = $_POST['password'];
$nickname = $_POST['nickname'];
$browser_ver = $_POST['browser_ver'];
if (!isset($_GET['lan']) || ($_GET['lan'] != "EN" || $_GET['lan'] != "FR" || $_GET['lan'] != "CNS"))
	$language = "EN";
else
	$language = $_GET['lan'];

$con = mysql_connect($db['db_address'], $db['db_username'], $db['db_password']);
mysql_query("SET NAMES utf8");
if (!$con) {
	die($db['db_err_connect'] . mysql_error()) . ".";
}

if ($username == '' || $password == '' || $nickname == '') {//账户要求没具体设定
	echo $Strings_EN['err_format'];
	exit();
}
mysql_select_db($db['db'], $con);
$query = sprintf("SELECT * FROM staffs WHERE username='%s'", mysql_real_escape_string($username));
$result = mysql_query($query);
$arr = mysql_fetch_array($result);
if ($arr['username'] == $username) {
	echo $Strings_EN['err_username_exist'];
	exit();
}
$ip = $_SERVER['REMOTE_ADDR'];//↓数据库行需要被修改
$query = sprintf("INSERT INTO '%s' (`username`, `password`, `nickname`, `add`, `ip_addr`, `browser_ver`) VALUES ('%s','%s','%s','%s','%s','%s')", mysql_real_escape_string($db['db_users']), mysql_real_escape_string($username), mysql_real_escape_string($password), mysql_real_escape_string($nickname), mysql_real_escape_string($add), mysql_real_escape_string($ip), mysql_real_escape_string($browser_ver));
mysql_query($query);
$query = sprintf("SELECT * FROM '%s' WHERE `username`='%s'", mysql_real_escape_string($db['db_user']), mysql_real_escape_string($username));
$result = mysql_query($query);
$arr = mysql_fetch_array($result);
$_SESSION['login'] = $username;
$_SESSION['username'] = $username;
$_SESSION['UID'] = $arr['UID'];
$_SESSION['nickname'] = $nickname;
echo $Strings_EN['success_register'];//调用Javascript返回首页
?>