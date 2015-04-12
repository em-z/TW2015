var bg_color = 'rgba(255 ,63 ,63 ,0.9)';
var verified = new Array(false, false);
function veri_username(id) {
    var un = document.getElementById(id);
    if (un.value.length < 4 || un.value.length > 16 || !isRegisterUserName(un.value) || isDigit(un.value)) {
        un.style.backgroundColor = bg_color;
        verified[0] = false;
    }
    else {
        un.style.backgroundColor = 'white';
        verified[0] = true;
    }
    if (verified[0] == true && verified[1] == true)
        document.getElementById('loginbutton').disabled = false;
    else
        document.getElementById('loginbutton').disabled = true;
}
function veri_password(id) {
    var un = document.getElementById(id);
    if (un.value.length < 6 || un.value.length > 16) {
        un.style.backgroundColor = bg_color;
        verified[1] = false;
    }
    else {
        un.style.backgroundColor = 'white';
        verified[1] = true;
    }
    if (verified[0] == true && verified[1] == true)
        document.getElementById('loginbutton').disabled = false;
    else
        document.getElementById('loginbutton').disabled = true;
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