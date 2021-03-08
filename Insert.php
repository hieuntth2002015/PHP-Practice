<?php
require_once 'login.php';

$conn = mysqli_connect($hn,$un,$pw,$db);
if(!$conn)
    die(mysqli_connect_error());

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$telephone = $_REQUEST['telephone'];

$query = "Insert into classics(name,age,address,telephone) values ('$name',$age,'$address','$telephone')";


$result = mysqli_query($conn,$query);
if(!$result) die ("insert failed");

echo "Inserted success";

mysqli_close($conn);
require_once 'show.php';
?>