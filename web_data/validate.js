var registration_email = document.querySelector("#registration-email");
var registration_password = document.querySelector("#registration-password");
var registration_passwordAgin = document.querySelector("#registration-passwordAgin");

var email_span = document.querySelector(".registration-email-span");
var password_span = document.querySelector(".registration-password-span");
var passwordAgin_span = document.querySelector(".registration-passwordAgin-span");

var button_login = document.querySelector(".btn-login");
var button_registration = document.querySelector(".btn-registration");

var login_email = document.querySelector("#login-email");
var login_password = document.querySelector("#login-password");

var email_span_login = document.querySelector(".login-email-span");
var password_span_login = document.querySelector(".login-password-span");


     console.log(button_registration);
    //  console.log(password_span_login);

     login_email.onblur = function(x){
validate(login_email.value,email_span_login,"*Bạn hãy nhập email đúng ...!",/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i);
}

login_password.onblur = function(x){
validate(login_password.value,password_span_login,"*Bạn hãy nhập mật khẩu gồm 8 ký tự trở lên !",/[A-Za-z\d]{8,}$/);
}
 document.querySelectorAll(".regex").forEach(  value => {
    value.style.color = "red";
    // console.log(value);
 })
 var check = 0;
 var check2 = 0;
 var check3 = 0;


 function validate(x,span,content,regex){
    var value = x;
    if(value == ""){
     span.innerHTML = "*Vui lòng nhập trường này!";
    }else{
        if(!(regex.test(value))){
            span.innerHTML = content;
        }else{
            span.innerHTML = "";
            if(span == email_span){
            check = 1;
            }else{
                check2 = 1;
            }
        }
    }

}

registration_email.onblur = function(x){
    validate(registration_email.value,email_span,"*Bạn hãy nhập email đúng ...!",/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i);
}

registration_password.onblur = function(x){
    validate(registration_password.value,password_span,"*Bạn hãy nhập mật khẩu gồm 8 ký tự trở lên !",/[A-Za-z\d]{8,}$/);
}


registration_passwordAgin.onblur = function(x){
    var value = registration_passwordAgin.value;
    if(value == ""){
        passwordAgin_span.innerHTML = "*Vui lòng nhập trường này!";
    }else{
        if(value == registration_password.value && /[A-Za-z\d]{8,}$/.test(value) ){
            passwordAgin_span.innerHTML = "";
            check3 = 1;
        }else{
            passwordAgin_span.innerHTML = "*Mật khẩu nhập lại sai hoặc không đủ ký tự!";

        }
    }
}


button_login.onclick = function(){
    if(check ==1 && check2 ==1 && check3 ==1){
    document.querySelector(".form").submit()
    }else{
        validate(registration_email.value,email_span,"*Bạn hãy nhập email đúng ...!",/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i);
        validate(registration_password.value,password_span,"*Bạn hãy nhập mật khẩu gồm 8 ký tự trở lên !",/[A-Za-z\d]{8,}$/);
        if(registration_passwordAgin.value == ""){
            passwordAgin_span.innerHTML = "*Vui lòng nhập trường này!";
        }else{
            if(value == registration_password.value ){
                passwordAgin_span.innerHTML = "";
                check3 = 1;
            }else{
                passwordAgin_span.innerHTML = "*Mật khẩu nhập lại sai!";
    
            }
        }

    } 
}
button_registration.onclick = function(){
    if(check ==1 && check2 ==1){
                    alert("ok");
    }else{
        validate(login_email.value,email_span_login,"*Bạn hãy nhập email đúng ...!",/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i);
        validate(login_password.value,password_span_login,"*Bạn hãy nhập mật khẩu gồm 8 ký tự trở lên !",/[A-Za-z\d]{8,}$/);
    } 
}

