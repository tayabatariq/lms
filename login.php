<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href=" css/indexlogin.css">
</head>
<body>
<form action="loginprocess.php" method="post">
    <div class="main">
        <div class="container"><br>
            <h2>Registration</h2><br><br>
            <input type="text" onfocusout="validateInput(this)"name="email"id="email"placeholder="Enter your Email...">
            <input type="password" onfocusout="validateInput(this)" name="userPassword" id="password" placeholder="Enter your Password...">
          
            <button type="submitt" class="btn" id="btn" onclick="return disableSubmit()">LOGIN</button><br><br>
            <p class="p2"><a href="index.php">Go to Home</a></p> 
        </div>
    
</form>
    
    <div class="main2">
        <h1>
        VuLearners: Where Knowledge Meets Innovation.
        </h1>
    </div>
    </div>
</body>
<script type="text/javascript"  src="js/first.js"></script>
</html>