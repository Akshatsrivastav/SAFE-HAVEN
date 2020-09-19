<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
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
<table>

<?php
$user ="root";
$pass ="";
$server='localhost';
$database='second';
$city = $_GET["city"];

$conn=mysqli_connect($server,$user,$pass,$database);


// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = 'SELECT Name, State, Number, Animal,Breed, Age, Medical,Information  FROM dataent WHERE State = "'.$city.'"';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo	"<tr>
<th>Name</th>
<th>City</th>
<th>Number</th>
<th>Animal</th>
<th>Breed</th>
<th>Age</th>
<th>Medical</th>
<th>Information</th>
</tr>";
// output data of each row
while($row = $result->fetch_assoc()) { 
echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["State"] . "</td><td>"
. $row["Number"]. "</td><td>". $row["Animal"] . "</td><td>". $row["Breed"] . "</td><td>". $row["Age"] . "</td><td>". $row["Medical"] . "</td><td>". $row["Information"] . "</td></tr>";
}
echo "</table>";
} else { echo "<p align='center'> <font color=Red  size='12pt'> No Results Found !!!</font> </p>"; }
$conn->close();
?>
</table>
</body>
</html>