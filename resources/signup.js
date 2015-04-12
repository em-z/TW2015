var bg_color = 'rgba(255 ,63 ,63 ,0.9)';
var verified = new Array(false, false, false);

function veri_username(id) {
    var un = document.getElementById(id);
    var err = document.getElementById('err');
    if (un.value.length < 4 || un.value.length > 16 || !isRegisterUserName(un.value)) {
        un.style.backgroundColor = bg_color;
        verified[0] = false;
        switch (getQueryString('lan')) {
            case "EN":
                err.innerHTML = Strings_EN.err_username; break;
            case "FR": err.innerHTML = Strings_FR.err_username; break;
            case "CHS": err.innerHTML = Strings_CHS.err_username; break;
            default: err.innerHTML = Strings_EN.err_username; break;
        }
    }
    else {
        un.style.backgroundColor = 'white';
        verified[0] = true;
        err.innerHTML = "";
    }
    if (verified[0] && verified[1] && verified[2])
        document.getElementById('signinbutton').disabled = false;
    else
        document.getElementById('signinbutton').disabled = true;
    checkAll();
}

function veri_password(id) {
    var un = document.getElementById(id);
    var err = document.getElementById('err');
    if (un.value.length < 6 || un.value.length > 16 || un.value == "111111" || un.value == "123456" || un.value == "000000" || un.value == "password" || isDigit(un.value)) {
        un.style.backgroundColor = bg_color;
        verified[2] = false;
        switch (getQueryString('lan')) {
            case "EN":
                err.innerHTML = Strings_EN.err_password; break;
            case "FR": err.innerHTML = Strings_FR.err_password; break;
            case "CHS": err.innerHTML = Strings_CHS.err_password; break;
            default: err.innerHTML = Strings_EN.err_password; break;
        }
    }
    else {
        un.style.backgroundColor = 'white';
        verified[2] = true;
        err.innerHTML = "";
    }
    if (verified[0] && verified[1] && verified[2])
        document.getElementById('signinbutton').disabled = false;
    else
        document.getElementById('signinbutton').disabled = true;
    checkAll();
}

function veri_nickname(id) {
    var un = document.getElementById(id);
    var err = document.getElementById('err');
    if (un.value.length < 4 || un.value.length > 16 || !isRegisterUserName(un.value)) {
        un.style.backgroundColor = bg_color;
        verified[1] = false;
        switch (getQueryString('lan')) {
            case "EN":
                err.innerHTML = Strings_EN.err_nickname; break;
            case "FR": err.innerHTML = Strings_FR.err_nickname; break;
            case "CHS": err.innerHTML = Strings_CHS.err_nickname; break;
            default: err.innerHTML = Strings_EN.err_nickname; break;
        }
    }
    else {
        un.style.backgroundColor = 'white';
        verified[1] = true;
        err.innerHTML = "";
    }
    if (verified[0] && verified[1] && verified[2])
        document.getElementById('signinbutton').disabled = false;
    else
        document.getElementById('signinbutton').disabled = true;
    checkAll();
}

function clearErrWindows() {
    var err = document.getElementById('err');
    err.innerHTML = "";
}

function isRegisterUserName(s) {
    var patrn = /^[a-zA-Z]{1}([a-zA-Z0-9]|[_]){4,16}$/;
    if (!patrn.exec(s))
        return false;
    return true
}

function isDigit(s) {
    var patrn = /^[0-9]{1,16}$/;
    if (!patrn.exec(s))
        return false;
    return true
}

function checkAll() {
    var un = document.getElementById("username");
    var pw = document.getElementById("password");
    var nn = document.getElementById("nickname");
    if (un.value.length < 4 || un.value.length > 16 || !isRegisterUserName(un.value) || pw.value.length < 6 || pw.value.length > 16 || pw.value == "111111" || pw.value == "123456" || pw.value == "000000" || pw.value == "password" || isDigit(pw.value) || nn.value.length < 4 || nn.value.length > 16 || !isRegisterUserName(nn.value)) {
        verified[0] = false;
        verified[1] = false;
        verified[2] = false;
    }
    else {
        err.innerHTML = "";
        document.getElementById('signinbutton').disabled = false;
    }
}

function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return null;
}