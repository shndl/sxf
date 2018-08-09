<?php
header("Content-Type:application/json;charset=utf-8");
header('Access-Control-Allow-Origin: *');
$conn = mysqli_connect("127.0.0.1","root","","pj",3306);
mysqli_query($conn,"set names utf-8")
?>