<?php
$bg = filter_input(INPUT_POST, 'bg');
$name = filter_input(INPUT_POST, 'name');
$contact = filter_input(INPUT_POST, 'contact');
$address = filter_input(INPUT_POST, 'address');
$status = filter_input(INPUT_POST, 'status');

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
$sql = "INSERT INTO blood_bank (bg, name, contact, address, status)
values ('$bg','$name','$contact','$address','$status')";
if ($conn->query($sql)){
    echo "Data Inserted Successfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
$conn->close();
}
?>