<?php
require_once 'login.php';
$conn = new mysqli($hn, $db, $un, $pw);
if ($conn->connect_error) die($conn->connect_errno);
?>