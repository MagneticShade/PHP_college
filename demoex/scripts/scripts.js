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

//     await fetch('php/handler.php', {
//         method: 'POST',
//         body: new FormData(form)
//       }).then(response =>{
//         return response.json();
//       }).then(json => {    
//         let tmp=json;
//         if(tmp['status']=='admin'){
//             window.location.href=('admin.php');
//             fetch('admin.php?name_ad='.tmp['name']);
//         }
//         else{
//             window.location.href=('users.php');
//             fetch('users.php?name_us='.tmp['name']);
//         }
//       });
//     dialog.close();
// })