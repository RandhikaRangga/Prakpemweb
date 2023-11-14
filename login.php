<?php
include "koneksi.php";
//session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

    //cek username
    if(mysqli_fetch_array($result) == 1 ){

        //cek password
        $row = mysqli_fetch_array($result);
        if(password_verify($password, $row["password"])){
            header("location: index.php");
            exit;
        }
    }
    
    //$error = true;
}
?>
<center><h1><b>LOGIN</b></h1></center>
<?php if(isset($error)) : ?>
    <p>Username Salah</p>
<?php endif; ?>
<form action="login.php" method="post">
    <table align="center">
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="login" value="Login!"></td>
        </tr>
    </table>
</form>