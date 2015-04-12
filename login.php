<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<title><?php
		switch ($lan) {
			case "EN":
				echo $Strings_EN['Login'];
				break;
			case "FR":
				echo $Strings_FR['Login'];
				break;
			case "CHS":
				echo $Strings_CHS['Login'];
				break;
		}
		?></title>
	<link rel="icon" href="resources/favicon.ico"/>
	<?php //add a md5 script
	?>
	<script type="text/javascript" src="resources/general.js"></script>
	<link rel="stylesheet" type="text/css" href="resources/login.css"/>
	<script src='resources/login.js'></script>
</head>
<body onload="document.getElementById('browser_ver').value = getBrowserVersion()">
<span id="login"><?php
	switch ($lan) {
		case "EN":
			echo $Strings_EN['Login'];
			break;
		case "FR":
			echo $Strings_FR['Login'];
			break;
		case "CHS":
			echo $Strings_CHS['Login'];
			break;
	}
	?></span>
<a style="font-size: 20px;" href="<?php
switch ($lan) {
	case "EN":
		echo "Acc.php?ref=" . $ref . "\">or " . $Strings_EN['SignUp'];
		break;
	case "FR":
		echo "Acc.php?lan=FR&ref=" . $ref . "\">ou " . $Strings_FR['SignUp'];
		break;
	case "CHS":
		echo "Acc.php?lan=CHS&ref=" . $ref . "\">或 " . $Strings_CHS['SignUp'];
		break;
}
?></a>
<div class=" login_frame">
<form action="Acc_h.php?type=login<?php
echo "&ref=" . $ref;
?>" method="post">
	<input class="textbox" id="username" name="username" type="text" maxlength="16" placeholder="<?php
	switch ($lan) {
		case "EN":
			echo $Strings_EN['Username'];
			break;
		case "FR":
			echo $Strings_FR['Username'];
			break;
		case "CHS":
			echo $Strings_CHS['Username'];
			break;
	}
	?>" onkeyup="veri_username(this.id);"/>
	<input class="textbox" id="password" name="password" type="password" maxlength="16" placeholder="<?php
	switch ($lan) {
		case "EN":
			echo $Strings_EN['Password'];
			break;
		case "FR":
			echo $Strings_FR['Password'];
			break;
		case "CHS":
			echo $Strings_CHS['Password'];
			break;
	}
	?>" onkeyup=" veri_password(this.id);"/>
	<input id="browser_ver" name="browser_ver" type="text" readonly
	       style="position: absolute; left: 0px; top: 0px; opacity: 0;"/>
	<input id="loginbutton" type="submit" value="<?php
	switch ($lan) {
		case "EN":
			echo $Strings_EN['Login'];
			break;
		case "FR":
			echo $Strings_FR['Login'];
			break;
		case "CHS":
			echo $Strings_CHS['Login'];
			break;
	}
	?>" disabled/>
</form>
</div>
<a id="forgot" href="forgot.html"><?php
	switch ($lan) {
		case "EN":
			echo $Strings_EN['ForgetPassword'];
			break;
		case "FR":
			echo $Strings_FR['ForgetPassword'];
			break;
		case "CHS":
			echo $Strings_CHS['ForgetPassword'];
			break;
	}
	?></a>
<a id="index" href="https://github.com/Voyager2718/TW2015"">TW2015</a>
</body>
</html>