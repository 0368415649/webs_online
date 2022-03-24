



var registration = document.querySelector(".header__navbar-item-registration"); 
var login = document.querySelector(".header__navbar-item-login"); 


var modal__overlay = document.querySelector(".modal__overlay"); 

var modal = document.querySelector(".modal"); 

var registration_show = document.querySelector(".modal__body-registration"); 
var login_show = document.querySelector(".modal__body-login");

var change_login = document.querySelector(".modal__inner-heard-login"); 
var change_registration = document.querySelector(".modal__inner-heard-registration"); 


var come_back = document.querySelector(".btn--hover"); 
var come_back2 = document.querySelector(".btn--hover-back"); 



registration.onclick = function(){
    modal.style.display ="flex";
    registration_show.style.display ="block";
    login_show.style.display ="none";
}

login.onclick = function(){
    modal.style.display ="flex";
    registration_show.style.display ="none";

    login_show.style.display ="block";
}


change_login.onclick = function(){
// console.log(change_login);

            registration_show.style.display ="none";

            login_show.style.display ="block";

}
change_registration.onclick = function(){
    registration_show.style.display ="block";
    login_show.style.display ="none";

    }

modal__overlay.onclick = function(){
    modal.style.display ="none";

}



come_back.onclick = function(){
    modal.style.display ="none";

}
come_back2.onclick = function(){
    modal.style.display ="none";

}