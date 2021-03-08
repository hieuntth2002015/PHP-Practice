<?php
require_once 'login.php';
$conn = new mysqli($hn,$db,$un,$pw);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM classics";
$result = $conn->query($query);
if(!$result) die($conn->error);
$rows = $result ->num_rows;
for($j = 0;$j < $rows;++$j){
    $result ->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo 'id: '.$row['id']."<br>";
    echo 'name: '.$row['name']."<br>";
    echo 'age: '.$row['age']."<br>";
    echo 'address: '.$row['adress']."<br>";
    echo 'telephone: '.$row['telephone']."<br>";

}
$result->close();
$conn->close();