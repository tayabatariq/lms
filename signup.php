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
            <input type="text" id="name" name="userName" placeholder="Enter your Name..." onfocusout="validateInputs()">
            <input type="text" id="email" name="userEmail" placeholder="Enter your Email... " onfocusout="validateInputs()">
            <input type="password"  id="password" placeholder="Enter your Password..." onfocusout="validateInputs()">
            <input type="password"  id="confirmpassword" placeholder="Confirm Password..." onfocusout="validateInputs()">
            <p><input type="checkbox" > I accept all term&conditions</p>
            <button type="submitt" class="btn" onclick="return disableSubmit()"> Register Now</button><br><br>
            <p>Already have an account? <br><a href="login.php">Login now</a></p> 
           <p class="p2"><a href="index.php">Go to Home</a></p> <br><br>
        </form> 
        </div>
        <div >
            <h1>  Welcome to VU LEARNERS  </h1>
        </div>
    </div>

</body>
<script type="text/javascript" src="js/script.js"></script>
</html>