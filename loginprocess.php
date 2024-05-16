<?php
print("hi");
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
    echo "<table border='2'>
            <th> id</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>created_at</th>
            <th>Action</th>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["username"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["password"]."</td>
            <td>".$row["created_at"]."</td>
            <td>Edit</td>
            </tr>";
        }

    echo "</table>";





?>
