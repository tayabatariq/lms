
function validateInputs(){

    var userName = document.getElementById('name');
    var userEmail = document.getElementById('email');
    var userPassword = document.getElementById('password');
    var userconfirmPassword = document.getElementById('confirmpassword');
    console.log(userName.value, "user" , userEmail.value, "email");
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
    if(userPassword.value == '' && userPassword.value =='9' ){
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



