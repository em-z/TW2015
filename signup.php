<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<title><?php
		switch ($lan) {
			case "EN":
				echo $Strings_EN['SignUp'];
				break;
			case "FR":
				echo $Strings_FR['SignUp'];
				break;
			case "CHS":
				echo $Strings_CHS['SignUp'];
				break;
		}
		?></title>
	<link rel="icon" href="resources/favicon.ico"/>
	<script type="text/javascript" src="resources/general.js"></script>
	<script type="text/javascript" src="resources/general.js"></script>
	<script type="text/javascript" src='resources/Strings.js'></script>
	<link rel="stylesheet" type="text/css" href="resources/signup.css"/>
	<script type="text/javascript" src='resources/signup.js'></script>
</head>
<body onload="document.getElementById('browser_ver').value = getBrowserVersion()">
<span id="signup"><?php
	switch ($lan) {
		case "EN":
			echo $Strings_EN['SignUp'];
			break;
		case "FR":
			echo $Strings_FR['SignUp'];
			break;
		case "CHS":
			echo $Strings_CHS['SignUp'];
			break;
	}
	?></span>
<a style="font-size: 20px;" href="<?php
switch ($lan) {
	case "EN":
		echo "Acc.php?type=login&ref=" . $ref . "\">or " . $Strings_EN['Login'];
		break;
	case "FR":
		echo "Acc.php?type=login&lan=FR&ref=" . $ref . "\">ou " . $Strings_FR['Login'];
		break;
	case "CHS":
		echo "Acc.php?type=login&lan=CHS&ref=" . $ref . "\">或 " . $Strings_CHS['Login'];
		break;
}
?></a>
<div class=" signin_frame">
<form action="Acc_h.php?type=signup<?php
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
	?>" onkeyup="veri_username(this.id);" onfocus="veri_username(this.id);" onkeydown="veri_username(this.id);"
	       onblur="clearErrWindows()"/>

	<div id="err"></div>
	<br/>
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
	?>" onkeyup="veri_password(this.id);" onfocus="veri_password(this.id);" onkeydown="veri_password(this.id);"
	       onblur="clearErrWindows()"/>

	<div id="err"></div>
	<br/>
	<input class="textbox" id="nickname" name="nickname" type="text" maxlength="16" placeholder="<?php
	switch ($lan) {
		case "EN":
			echo $Strings_EN['Nickname'];
			break;
		case "FR":
			echo $Strings_FR['Nickname'];
			break;
		case "CHS":
			echo $Strings_CHS['Nickname'];
			break;
	}
	?>" onkeyup="veri_nickname(this.id);" onfocus="veri_nickname(this.id);" onkeydown="veri_nickname(this.id);"
	       onblur="clearErrWindows()"/>

	<div id="err"></div>
	<br/>
	<input id="browser_ver" name="browser_ver" type="text" readonly maxlength="64"
	       style="position: absolute; left: 0px; top: 0px; opacity: 0;"/>
	<input id="signinbutton" type="submit" value="<?php
	switch ($lan) {
		case "EN":
			echo $Strings_EN['SignUp'];
			break;
		case "FR":
			echo $Strings_FR['SignUp'];
			break;
		case "CHS":
			echo $Strings_CHS['SignUp'];
			break;
	}
	?>" disabled/>
</form>
</div>
<a id="index" href="https://github.com/Voyager2718/TW2015">TW2015</a>
</body>
</html>
