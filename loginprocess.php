<?php
// print("hi");
print($_POST["email"] . "<br>" . $_POST["userPassword"]);
$serverName="localhost";
$userName="root";
$userPassword="";
$dbName="vuLearners";

$conn=new mysqli($serverName,$userName,$userPassword,$dbName);
if($conn->connect_error){
    print("error");
}

$sql="select * from studentInfo";

$result=$conn->query($sql);
   





?>
