
function validateInputs(){

    var userName = document.getElementById('name');
    var userEmail = document.getElementById('email');
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

}



