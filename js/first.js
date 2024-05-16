function validateInput(){
    let userEmail = document.getElementById('email');
    let userPassword = document.getElementById('password');
    

    if(userEmail.value == ''){
        userEmail.style.border = "1px solid red";
    }else{
        userEmail.style.border = "1px solid black";
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
    let userEmail = document.getElementById('email');
    let userPassword = document.getElementById('password');
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
   
    if(userEmail.value == ''  || userPassword.value == '' ){
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