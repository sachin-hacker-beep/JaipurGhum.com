let loginbtn = document.querySelector('#login-btn');
let register_btn = document.querySelector('#register-btn');
let container = document.querySelector('#container');
let form_container = document.querySelector('.form-container');
let formclose = document.querySelector('#form-close');
let formclose2 = document.querySelector('#fa-xmark');
let slidebtn = document.querySelectorAll('.slide');
let menubar = document.querySelector('#menubars');
let nav2ul = document.querySelector('.nav2list');
let signupbtn = document.querySelector('#signup-btn');

window.onscroll = () =>{
    container.classList.remove('active');
    form_container.classList.remove('active');
    menubar.classList.remove('fa-xmark');
    nav2ul.classList.remove('active');
}
loginbtn.addEventListener('click', ()=>{
    container.classList.add('active');
});
register_btn.addEventListener('click', ()=>{
    container.classList.remove('active');
    form_container.classList.add('active');
});
signupbtn.addEventListener('click', ()=>{
    container.classList.add('active');
    form_container.classList.remove('active');
});

formclose.addEventListener('click', ()=>{
    form_container.classList.remove('active');
});
formclose2.addEventListener('click', ()=>{
    container.classList.remove('active');
});
slidebtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.slider-btn .active-slide').classList.remove('active-slide');
        btn.classList.add('active-slide');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    })
});
menubar.addEventListener('click', ()=>{
    menubar.classList.toggle('fa-xmark');
    nav2ul.classList.toggle('active');
    
});



// form


// function func(){
//     var email = document.getElementById("email-box").value;
//     var pass = document.getElementById("Password-box").value;
//     if (email == 'mrshivam073@gmail.com' && pass == '123456'){
//         alert("success full !");
//         window.location.assign("index.html");
//     }
//     else {
//         alert("In Valid User !") ;
//     }
// }