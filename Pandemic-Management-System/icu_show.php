<!DOCTYPE html>
<html>
<head>
<title>ICU</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 15px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
    <center> <h1>All Information About ICU</h1>
    </center>
<table>
<tr>
<th>Hospital Name</th>
<th>Address</th>
<th>Contact</th>
<th>Total ICU</th>
<th>Available ICU</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "pms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT hospital, address, contact, total_icu, available_icu FROM icu_info";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["hospital"]. "</td><td>" . $row["address"] . "</td><td>"
. $row["contact"]. "</td><td>" . $row["total_icu"]. "</td><td>" . $row["available_icu"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>