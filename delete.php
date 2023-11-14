<?php
    include('koneksi.php');
    session_start();
    $id=$_GET['id'];
    if($id!=""){
        $stmt=mysqli_query($conn, "delete from watchlist where id='$id'");
        header("Location:index.php");
    }
?>