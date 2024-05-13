
function showMessege(){
    let userPassword=document.getElementById("password");
    let userconfirmPassword=document.getElementById("confirmpassword");
    
    let messegeError=document.getElementById("messege");
    if(userPassword.value!=userconfirmPassword.value){
    
        messegeError.style.display="block";
    }else{
        messegeError.style.display="none";
    }
    
}


function validateInput(elm){
    console.log(elm.id);
    if(elm.value == ''){
        elm.style.border = "1px solid red";
    }else{
        elm.style.border = "1px solid black";
    }
    if(elm.id=="confirmpassword"){
        showMessege();

    }
  
}

function disableSubmit(){
    let userName = document.getElementById('name');
    let userEmail = document.getElementById('email');
    let userPassword = document.getElementById('password');
    let userconfirmPassword = document.getElementById('confirmpassword');
    if(userName.value == ''){
        userName.style.border = "1px solid red";
    }else{
        userName.style.border = "1px solid black";
    }

    if(userEmail.value == ''){
        userEmail.style.border = "1px solid red";
    }else{
        userEmail.style.border = "1px solid black";
    }
    if(userPassword.value == '' && userPassword.value.length <= 7){
        userPassword.style.border = "1px solid red";
    }else{
        userPassword.style.border = "1px solid black";
    }
    if(userconfirmPassword.value == ''){
        userconfirmPassword.style.border = "1px solid red";
    }else{
        userconfirmPassword.style.border = "1px solid black";
    }
    if(userName.value == '' || userEmail.value == '' || userPassword.value == '' || userconfirmPassword.value == ''){
        alert("Please fill all the required fields");
        return false;
    }
}

function enable(){
    let check=document.getElementById("check");
    let btn=document.getElementById("btn");
    if(check.checked){
        btn.removeAttribute("disabled");
    }else{
        btn.disabled="true";
    }
}


