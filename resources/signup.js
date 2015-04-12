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
                err.innerHTML = "Username must begin with a letter and have at least 5 characters."; break;
            case "FR": err.innerHTML = "Username must begin with a letter and have at least 5 characters."; break;
            case "CHS": err.innerHTML = "Username must begin with a letter and have at least 5 characters."; break;
            default: err.innerHTML = "Username must begin with a letter and have at least 5 characters."; break;
        }
    }
    else {
        un.style.backgroundColor = 'white';
        verified[0] = true;
        err.innerHTML = "";
    }
    if (verified[0] == true && verified[1] == true && verified[2] == true)
        document.getElementById('signinbutton').disabled = false;
    else
        document.getElementById('signinbutton').disabled = true;
}
function veri_nickname(id) {
    var un = document.getElementById(id);
    var err = document.getElementById('err');
    if (un.value.length < 4 || un.value.length > 16 || !isRegisterUserName(un.value)) {
        un.style.backgroundColor = bg_color;
        verified[1] = false;
        switch (getQueryString('lan')) {
            case "EN":
                err.innerHTML = "Nickname must begin with a letter and have at least 5 characters."; break;
            case "FR": err.innerHTML = "Nickname must begin with a letter and have at least 5 characters."; break;
            case "CHS": err.innerHTML = "Nickname must begin with a letter and have at least 5 characters."; break;
            default: err.innerHTML = "Nickname must begin with a letter and have at least 5 characters."; break;
        }
    }
    else {
        un.style.backgroundColor = 'white';
        verified[1] = true;
        err.innerHTML = "";
    }
    if (verified[0] == true && verified[1] == true && verified[2] == true)
        document.getElementById('signinbutton').disabled = false;
    else
        document.getElementById('signinbutton').disabled = true;
}
function veri_password(id) {
    var un = document.getElementById(id);
    var err = document.getElementById('err');
    if (un.value.length < 6 || un.value.length > 16 || un.value == "111111" || un.value == "123456" || un.value == "000000" || un.value == "password" || isDigit(un.value)) {
        un.style.backgroundColor = bg_color;
        verified[2] = false;
        switch (getQueryString('lan')) {
            case "EN":
                err.innerHTML = "Password must have at least 6 characters, and least a letter or symbol."; break;
            case "FR": err.innerHTML = "Password must have at least 6 characters, and least a letter or symbol."; break;
            case "CHS": err.innerHTML = "Password must have at least 6 characters, and least a letter or symbol."; break;
            default: err.innerHTML = "Password must have at least 6 characters, and least a letter or symbol."; break;
        }
    }
    else {
        un.style.backgroundColor = 'white';
        verified[2] = true;
        err.innerHTML = "";
    }
    if (verified[0] == true && verified[1] == true && verified[2] == true)
        document.getElementById('signinbutton').disabled = false;
    else
        document.getElementById('signinbutton').disabled = true;
}

function clearErrWindows() {
    var err = document.getElementById('err');
    err.innerHTML = "";
}

function isRegisterUserName(s) {
    var patrn = /^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){4,15}$/;
    if (!patrn.exec(s))
        return false;
    return true
}

function isDigit(s) {
    var patrn = /^[0-9]{1,15}$/;
    if (!patrn.exec(s))
        return false;
    return true
}

function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return null;
}