"use strict"
let login_button=document.getElementById('login');
let dialog=document.getElementById('log_window');
login_button.addEventListener('click',function (event) {
    event.preventDefault();
    dialog.showModal();
});
// let form=document.querySelector('form');
// document.getElementById('send').addEventListener('click',async function name(event) {
//     event.preventDefault();
setInterval(async function(){
    await fetch('php/handler.php').then(response =>{
        return response.text();
      }).then(text => {
           document.getElementById('requests_sum').innerHTML=text;
    })},5000);