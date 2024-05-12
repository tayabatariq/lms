
function validateInputs(){
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
}

function disableSubmit(){
    let userName = document.getElementById('name');
    let userEmail = document.getElementById('email');
    let userPassword = document.getElementById('password');
    let userconfirmPassword = document.getElementById('confirmpassword');
    
    if(userName.value == '' || userEmail.value == '' || userPassword.value == '' || userconfirmPassword.value == ''){
        alert("Please fill all the required fields");
        return false;
    }
}

    
if(userName.value == '' && userEmail.value == '' && userPassword.value == '' && userconfirmPassword.value == ''){
   
    userName.style.border = "1px solid black";
    userEmail.style.border = "1px solid black";
    userPassword.style.border = "1px solid black";
    userconfirmPassword.style.border = "1px solid black";

}
function enable(){
    let check=document.getElementByid("check");
    let btn=document.getElementByid("btn");
    if(check.checked){
        btn.removedAttribute("disabled");
    }else{
        btn.disabled="true";
    }

}



