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
		echo "<script>self.location=\"" . $ref . "\"</script>";
		exit();
	} else {
		echo "<script>self.location=\"index.php\"</script>";
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