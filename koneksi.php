<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$host='localhost';
$usser='root';
$password='';
$db='huludb';

$conn = mysqli_connect($host,$usser,$password,$db) or die("gagal koneksi");
?>