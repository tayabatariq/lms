<?php
$serverName="localhost";
$userName="root";
$userPassword="";
$dbName="vuLearners";

$conn=new mysqli($serverName,$userName,$userPassword,$dbName);
if($conn->connect_error){
    print("error");
}
$userEmail = $_POST['email'];
$userPassword = $_POST['userPassword'];

$sql="select * from studentInfo where email= '$userEmail' and password = '$userPassword'";



$result=$conn->query($sql);

if($result->num_rows > 0 ){
    //create session
    // $_SESSION["userName"] = $userEmail;
};



?>
