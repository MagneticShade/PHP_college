'use strict'
let form=document.querySelector('form');
document.getElementById('send').addEventListener('click',async function name(event) {
    event.preventDefault();

    await fetch('handler.php', {
        method: 'POST',
        body: new FormData(form)
      }).then(response =>{
        return response.text();
      }).then(text => {    
        document.getElementById('res').innerHTML += text;
      });
    
})

// 'use strict'
// let form=document.querySelector('form');
// document.getElementById('send').addEventListener('click',async function name(event) {
//     event.preventDefault();

//     await fetch('handler.php', {
//         method: 'POST',
//         body: new FormData(form)
//       }).then(response=>{
//         return response.text;
//       }).then(text=>{
//         document.getElementById('res').innerHTML=text;
//       })
    
// })