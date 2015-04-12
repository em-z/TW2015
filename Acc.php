<?php
header("Content-Type: text/html;charset=utf-8");
include "resources/Strings.php";
session_start();
if (isset($_SESSION['UID'])) {
	echo "<script>self.location=\"index.php\"</script>";
	exit();
}
if (!isset($_GET['ref']))
	if (isset($_SERVER['HTTP_REFERER']))
		$ref = $_SERVER['HTTP_REFERER'];
	else
		$ref = "";
else
	$ref = $_GET['ref'];

if (isset($_GET['type']) && ($_GET['type'] == "signup" || $_GET['type'] == "login"))
	$type = $_GET['type'];
else $type = "signup";
if (isset($_GET['lan']) && ($_GET['lan'] == "EN" || $_GET['lan'] == "FR" || $_GET['lan'] == "CHS"))
	$lan = $_GET['lan'];
else $lan = "EN";
if ($type == "login")
	include "login.php";
else
	include "signup.php";
?>
