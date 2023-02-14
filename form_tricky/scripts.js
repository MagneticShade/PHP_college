"use strict"
let form= document.querySelector('form');
let submit=document.getElementById('btnsubmit');
let background=document.getElementById(`background`);
let window_modal=document.getElementById(`window2`);

let log_c=document.getElementById(`log_c`);
let pas_c=document.getElementById('pass_c');
let about_c=document.getElementById(`about_c`);
let exp_c=document.getElementById(`exp_c`);
let sex_c=document.getElementById(`sex_c`);
let lang_c=document.getElementById(`lang_c`);

let cancel=document.getElementById('cancel');
let send=document.getElementById('send');
send.addEventListener('click',function () {
    form.submit();
})
// function getFormValue(event) {
//     event.preventDefault();
//     let obj={};
//     for (let field of form){
//         let {name}=field;
//         if(name){
//             let {type,checked,value}=field;
//             obj[name]=checkboxRadio(type)?checked:value;
//         }
//     }
//     console.log(obj);
// }
// function checkboxRadio(type) {
//     return['checkbox','radio'].includes(type);
// }
// form.addEventListener('submit',getFormValue);

let basic_obj={};
let sex_obj={};
let language_obj={};

form.addEventListener('change',function () {
    checkFillings();
    if (!(Object.values(basic_obj).includes(''))&&Object.values(sex_obj).includes(true)&&(Object.values(language_obj).includes(true))){
    submit.disabled=false;
    }
});

form.addEventListener('submit',function (event) {

    event.preventDefault();

    window_modal.classList.toggle(`hidden`);
    background.classList.toggle(`invisible`);

    log_c.textContent=`Логин ${basic_obj['login']}`;
    pas_c.textContent=`Пароль ${basic_obj['pass']}`
    about_c.textContent=`О вас ${basic_obj['about']}`
    exp_c.textContent=`Стаж ${basic_obj['select']}`
    sex_c.textContent=`Пол ${Object.keys(sex_obj).filter(function (key) {
        return(sex_obj[key]);
    })}`
    lang_c.textContent=`Языки ${Object.keys(language_obj).filter(function (key) {
        return(language_obj[key]);
    })}`

})

cancel.addEventListener('click',function () {
    window_modal.classList.toggle(`hidden`);
    background.classList.toggle(`invisible`);
})
function checkFillings(){

    for (let field of form) {
        let {name, checked, value} = field;
        if (name) {
            switch (name) {
                case'sex':
                    sex_obj[value] = checked;
                    break;
                case'language': {
                    language_obj[value] = checked;
                    break;
                }
                default:
                    basic_obj[name] = value;
            }
        }
    }
}
