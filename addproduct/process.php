<?php
// database connection code
if(isset($_POST['Save']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
include '../db_config.php';
$con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

// get the post records
$SKU = $_POST['sku'];
$Name = $_POST['name'];
$Price = $_POST['price'];
$Type = $_POST['productType']; 
$Atributes = 0;
$DVD = $_POST['DVD'];
$Book = $_POST['Book'];
$Furniture1 = $_POST['Furniture1'];
$Furniture2 = $_POST['Furniture2'];
$Furniture3 = $_POST['Furniture3'];
$Furniture = $Furniture1 . $Furniture2 . $Furniture3;

if (strlen($Furniture) > 0) {
	$Atributes = "Dimension: " . $Furniture1 . " x " . $Furniture2 . " x " . $Furniture3;
}
elseif (strlen($Book) > 0) {
	$Atributes = "Weight: " . $Book . " KG";
}
elseif (strlen($DVD) > 0) {
	$Atributes = "Size: " . $DVD . " MB";
}
// database insert SQL code
$sql = "INSERT INTO `products`(`SKU`, `Name`, `Price`, `Type`, `Atributes`) VALUES ('$SKU','$Name','$Price','$Type','$Atributes')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted" . strlen($DVD) . " " . strlen($Book) . " " . strlen($Furniture);
	header("Location:../index.php");
}
}
elseif ($con)
{
	echo "I got connection, but dont like your insert info.";
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>