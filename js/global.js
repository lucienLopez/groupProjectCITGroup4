var RegisterFormUserNameOk = false;
var RegisterFormUserEmailOk = false;
var RegisterFormUserPasswordOk = false;


function showRegisterPopup(){
    document.getElementById("registerPopup").style.visibility = 'visible';
    document.getElementById("actualPage").style.opacity = "0.4";
    document.getElementById("registerPopup").style.zIndex = "10";
}
function hideRegisterPopup(){
    document.getElementById("registerPopup").style.visibility = 'hidden';
    document.getElementById("actualPage").style.opacity = "1";
    document.getElementById("registerPopup").style.zIndex = "0";
}
function registerFormCheckUsername(){
    document.getElementById("registerFormUsername").className = "registerFormField registerFormFieldLoading";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "tools/checkUsername.php?username="+document.getElementById("registerFormUsername").value, true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == xhr.DONE) {
            if(xhr.responseText=="1"){
                document.getElementById("registerFormUsername").className = "registerFormField registerFormFieldOk";
                RegisterFormUserNameOk=true;
                if(RegisterFormUserEmailOk&&RegisterFormUserPasswordOk){
                    document.getElementById("registerFormSubmitButton").disabled=false;
                }
            }else{
                document.getElementById("registerFormUsername").className = "registerFormField registerFormFieldKo";
                RegisterFormUserNameOk=false;
            }
        }
    };
    xhr.send(null);
}
function registerFormCheckConfirmPassword() {
    registerFormPasswordConfirm = document.getElementById("registerFormPasswordConfirm");
    registerFormPassword = document.getElementById("registerFormPassword");

    if(registerFormPasswordConfirm.value==registerFormPassword.value){
        registerFormPasswordConfirm.className = "registerFormField registerFormFieldOk";
        registerFormPassword.className = "registerFormField registerFormFieldOk";
        RegisterFormUserPasswordOk = true;
        if(RegisterFormUserEmailOk&&RegisterFormUserNameOk){
            document.getElementById("registerFormSubmitButton").disabled=false;
        }
    }else{
        registerFormPasswordConfirm.className = "registerFormField registerFormFieldKo";
        registerFormPassword.className = "registerFormField registerFormFieldKo";
        RegisterFormUserPasswordOk = false;
        document.getElementById("registerFormSubmitButton").disabled=true;
    }
}
function registerFormCheckConfirmEmail() {
    registerFormEmailConfirm = document.getElementById("registerFormEmailConfirm");
    registerFormEmail = document.getElementById("registerFormEmail");

    if(registerFormEmail.value==registerFormEmailConfirm.value){
        registerFormEmailConfirm.className = "registerFormField registerFormFieldOk";
        registerFormEmail.className = "registerFormField registerFormFieldOk";
        RegisterFormUserEmailOk=true;
        if(RegisterFormUserPasswordOk&&RegisterFormUserNameOk){
            document.getElementById("registerFormSubmitButton").disabled=false;
        }
    }else{
        registerFormEmailConfirm.className = "registerFormField registerFormFieldKo";
        registerFormEmail.className = "registerFormField registerFormFieldKo";
        RegisterFormUserEmailOk=false;
        document.getElementById("registerFormSubmitButton").disabled=true;
    }
}