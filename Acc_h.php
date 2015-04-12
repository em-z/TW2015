<?php
header("Content-Type: text/html;charset=utf-8");
include "resources/Strings.php";
session_start();
if (isset($_GET['type']) && ($_GET['type'] == "signup" || $_GET['type'] == "login"))
	$type = $_GET['type'];
else $type == "signup";
if (isset($_GET['ref']))
	$ref = $_GET['ref'];
else $ref = "";
if ($type == "signup") {

	//成功后
	if ($ref != "") {
		echo "<script>window.location.href=\"http://" . $ref . "\"</script>";//需要修改 + js 忘记了有时候会自动填充，所以按一个的时候自动检测其他全部
		exit();
	} else {
		echo "<script>self.location.href=\"index.php\"</script>";
		exit();
	}
} else {

	//成功后
	if ($ref != "") {
		echo "<script>self.location.href=\"" . $ref . "\"</script>";
		exit();
	} else {
		echo "<script>self.location.href=\"index.php\"</script>";
		exit();
	}
}
?>