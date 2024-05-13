function validateInput(){
    let userName = document.getElementById('name');
    let userEmail = document.getElementById('email');
    let userPassword = document.getElementById('password');
  

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
}

