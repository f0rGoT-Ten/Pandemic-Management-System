<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "pms";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO userdata (username, password)
values ('$username','$password')";
if ($conn->query($sql)){
    echo "Login Successfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
$conn->close();
}
?>