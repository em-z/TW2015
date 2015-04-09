<?php
header("Content-Type: text/html;charset=utf-8");
session_start();
$_SESSION['login'] = NULL;
$con = mysql_connect("localhost", "staffs", "35F966C3FD71ADC2");

if (!$con) {
	die('数据库连接出错，错误代码：' . mysql_error()) . ".";
}
mysql_query("SET NAMES utf8");
$username = $_POST['username'];
$password = $_POST['password'];
$browser_ver = $_POST['browser_ver'];
if ($username == '' || $password == '') {
	echo "<script>alert('用户名或密码不能为空.');self.location.href='login.html';</script>";
	exit();
} else {
	mysql_select_db("ChangleTech", $con);
	$query = sprintf("SELECT * FROM staffs WHERE username='%s' AND BINARY password='%s'", mysql_real_escape_string($username), mysql_real_escape_string($password));
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password) {
		if ($row['blocked'] == 1) {
			echo "<script>alert('账户被冻结，请联系管理员.');self.location.href='login.html';</script>";
			exit();
		} else {
			$_SESSION[login] = $username;
			$_SESSION['username'] = $username;
			$_SESSION['rights'] = $row['rights'];
			$_SESSION['nickname'] = $row['nickname'];
			$_SESSION['UID'] = $row['UID'];
			$UID = $row['UID'];
			$ip = $_SERVER['REMOTE_ADDR'];
			mysql_query("UPDATE `ChangleTech`.`staffs` SET `ip_addr` = '$ip' WHERE staffs.UID = '$UID'");
			$query2 = sprintf("UPDATE `ChangleTech`.`staffs` SET `browser_ver` = '%s' WHERE `staffs`.`UID` = '$UID';", mysql_real_escape_string($browser_ver));
			mysql_query("UPDATE `ChangleTech`.`staffs` SET `browser_ver` = '$browser_ver' WHERE `staffs`.`UID` = '$UID';");
			if ($row['rights'] <= 3) {
				echo "<script>self.location.href='management.php'</script>";
				exit();
			} else {
				echo "<p>登陆成功，即将返回首页.</p><script>self.location.href='http://changletech.com';</script>";
				exit();
			}
		}
	} else {
		echo "<script>alert('用户名或密码错误.');self.location.href='login.html';</script>";
	}
}
?>