function validateInput(){
    let userName = document.getElementById('name');
    let userPassword = document.getElementById('password');
    let userConfirmPassword = document.getElementById('userConfirmPassword');
  

    if(userName.value == ''){
        userName.style.border = "1px solid red";
    }else{
        userName.style.border = "1px solid black";
    }
    if(userPassword.value == ''){
        userPassword.style.border = "1px solid red";
    }else{
        userPassword.style.border = "1px solid black";
    }

    if(userConfirmPassword.value == ''&& userPassword.value.length <= 7){
        userConfirmPassword.style.border = "1px solid red";
    }else{
        userConfirmPassword.style.border = "1px solid black";
    }
   
}

function disableSubmit(){
    let userName = document.getElementById('name');
    let userPassword = document.getElementById('password');
    let userConfirmPassword = document.getElementById('ConfirmPassword');
    if(userName.value == ''){
        userName.style.border = "1px solid red";
    }else{
        userName.style.border = "1px solid black";
    }
    if(userPassword.value == '' && userPassword.value.length <= 7){
        userPassword.style.border = "1px solid red";
    }else{
        userPassword.style.border = "1px solid black";
    }
    if(userConfirmPassword.value == ''){
        userConfirmPassword.style.border = "1px solid red";
    }else{
        userConfirmPassword.style.border = "1px solid black";
    }
    if(userName.value == ''  || userPassword.value == '' || userConfirmPassword.value == ''){
        alert("Please fill all the required fields");
        return false;
    }
}
function validateInput(elm){
    console.log(elm.id);
    if(elm.value == ''){
        elm.style.border = "1px solid red";
    }else{
        elm.style.border = "1px solid black";
    }
    if(elm.id=="ConfirmPassword"){
       

    }}