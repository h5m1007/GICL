function chkHkid(hkid) {
    var id = hkid.toLocaleUpperCase().replace('(', '').replace(')', '');
    var num = 324;
    num += (id[0].charCodeAt() - 55) * 8;
    for (var i = 1; i < 7; i++) {
        num += parseInt(id[i]) * (8 - i);
    }
    return id[7] == 11 - num % 11;
}

function IdValidFrom2(value) {
    var idNum = $('.cont_right_2_form input[name=idNum_input]').val();
    return HkidChk(idNum, value);
}

function HkidChk(idNum, idChk) {
    var id = idNum.toLocaleUpperCase();
    var len = id.length;

    if (!isIdNum(idNum))
        return false;

    var num = 324;
    num += (id.charCodeAt(0) - 55) * 8;
    for (var i = 1; i < len; i++) {
        num += parseInt(id[i]) * (8 - i);
    }
    return idChk == 11 - num % 11;
}

function isIdNum(idNum) {
    return /^[a-zA-Z][0-9]{6}$/.test(idNum);
}
