<?php
require_once 'login.php';
require_once '1.php';
require_once '2.php';
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM classics";
$result = $conn->query($query);
if(!$result) die($conn->error);
$rows = $result ->num_rows;
for($j = 0;$j < $rows;++$j){
    $result ->data_seek($j);
    echo 'id: '.$result->fetch_assoc()['id'].'<br>';
    $result->data_seek($j);
    echo 'name: '.$result->fetch_assoc()['name'].'<br>';
    $result->data_seek($j);
    echo 'age: '.$result->fetch_assoc()['type'].'<br>';
    $result->data_seek($j);
    echo 'address: '.$result->fetch_assoc()['adress'].'<br>';
    $result->data_seek($j);
    echo 'telephone: '.$result->fetch_assoc()['telephone'].'<br>';
}
$result->close();
$conn->close();
