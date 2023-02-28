'use strict';

async function showItems(str) {
  await fetch('func.php?key=' +str).then(response =>{
    return response.text();
  }).then(text => {    
    document.getElementById(str).innerHTML += text;
  });
  }

  document.addEventListener("DOMContentLoaded", function() {
        let selectArr = document.querySelectorAll('select');
        for(let el of selectArr){          
          el.addEventListener('change', async function() {            
            await fetch('func2.php?key=' +el.value).then(response =>{
              return response.text();
            }).then(text => {              
              document.getElementById('table').innerHTML = text;
              setTimeout(() => {
                this.children[0].selected = true;
              }, 500);              
            });            
          })          
        }   
    });