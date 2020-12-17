
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


function isMatchReg() {
    if (document.form_reg.passwd.value != document.form_reg.cfmpasswd.value) {
		alert("Password do not match!")
		return false;
	}
}

function isMatchFor() {
    if (document.form_for.newpasswd.value != document.form_for.cfmnewpasswd.value) {
		alert("Password do not match!")
		return false;
	}
}