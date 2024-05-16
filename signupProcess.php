<?php 

$serverName="localhost";
$userName="root";
$userPassword="";
$dbName="vuLearners";

$conn=new mysqli($serverName,$userName,$userPassword,$dbName);
if($conn->connect_error){
    print("error");
}
$name=$_POST["userName"];
$userEmail=$_POST["userEmail"];
$userPassword=$_POST["userPassword"];
$sql="insert into studentInfo (username,email,password,created_at)values('$name','$userEmail','$userPassword',now())";
if($conn->query($sql)==true)
{
    print("one record inserted successfully");
}else{
    echo("error in DB query");
}

?>