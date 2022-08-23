<?php
$hospital = filter_input(INPUT_POST, 'hospital');
$address = filter_input(INPUT_POST, 'address');
$contact = filter_input(INPUT_POST, 'contact');
$total_icu = filter_input(INPUT_POST, 'total_icu');
$available_icu = filter_input(INPUT_POST, 'available_icu');

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
$sql = "INSERT INTO icu_info (hospital, address, contact, total_icu, available_icu)
values ('$hospital','$address','$contact','$total_icu','$available_icu')";
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