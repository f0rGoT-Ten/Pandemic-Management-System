<?php
$name = filter_input(INPUT_POST, 'name');
$area = filter_input(INPUT_POST, 'area');
$contact = filter_input(INPUT_POST, 'contact');
$pharmacist = filter_input(INPUT_POST, 'pharmacist');
$timing = filter_input(INPUT_POST, 'timing');

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
$sql = "INSERT INTO pharmacy_info (name, area, contact, pharmacist, timing)
values ('$name','$area','$contact','$pharmacist','$timing')";
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