<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
   <link rel="stylesheet" href="css/indexsign.css">
</head>
<body>
   
    <div id="maindiv">
        <form action="signupProcess.php" method="POST">
        <div class="div">
            <h2>Registration</h2>
            <input type="text" id="name" name="userName" placeholder="Enter your Name..." onfocusout="validateInput(this)">
            <input type="text" id="email" name="userEmail" placeholder="Enter your Email... " onfocusout="validateInput(this)">
            <input type="password"  id="password" placeholder="Enter your Password..." onfocusout="validateInput(this)">
            <span id="messege" style="display:none;">Confirm Password does not match</span>
            <input type="password"  id="confirmpassword" placeholder="Confirm Password..." onfocusout="validateInput(this)" >
            <p><input type="checkbox" id="check" onchange="enable()"> I accept all term&conditions</p>
            <button type="submitt" class="btn" id="btn"  onclick="return disableSubmit()" disabled="ture"> Register Now</button><br><br>
            <p>Already have an account? <br><a href="login.php">Login now</a></p> 
           <p class="p2"><a href="index.php">Go to Home</a></p> <br><br>
        </form> 
        </div>
        <div>
            <h1>  Welcome to VU LEARNERS  </h1>
        </div>
    </div>

</body>
<script type="text/javascript" src="js/script.js"></script>
</html>