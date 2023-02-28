"use strict"
async function fill_selector(str) {
    await fetch('fill_form.php?key=' +str).then(response =>{
      return response.text();
    }).then(text => {    
      document.getElementById(str).innerHTML += text;
    });
    }
document.addEventListener('DOMContentLoaded',function () {
  $query="";
  document.getElementById('check').addEventListener('click', async function () {
    let selectors=document.querySelectorAll("select");
    for(let select of selectors){
      if(select.value!=0){
        $query+=`${select.getAttribute(id)}?=${select.value}`;
      }
    }
    await fetch(`res.php`+$query).then(response=>{
      return response.text;
    }).then(text=>{
      document.getElementById('result').innerHTML=text;
    })
  })

})