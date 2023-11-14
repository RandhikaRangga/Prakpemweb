<?php
include "koneksi.php";
session_start();

if(isset($_POST['insert'])){
    $title = $_POST['title'];
    $cast = $_POST['cast'];
    $sypnosis = $_POST['sypnosis'];
    $writer = $_POST['writer'];

    if($title !="" && $cast!="" && $sypnosis!="" && $writer!=""){
        $sql = "insert into watchlist(title,cast,sypnosis,writer) values('$title','$cast','$sypnosis','$writer')";
        $query = mysqli_query($conn,$sql);
        header("location:index.php");
    }else{
        ?>
            <script>alert("Form belum diisi");</script>
        <?php
    }
}
?>

<center><h1>Add your favorite movie, <?php echo $_SESSION['username'] ?></h1></center>
    <table align="center">
        <tr>
            <td><a href="index.php"><button>home</button></a></td>
            <td></td>
            <td></td>
        </tr>
        <form action="insert.php" method="post">
        <tr>
            <td>Title</td>
            <td>:</td>
            <td><input type="text" name="title" placeholder="Input movie title"></td>
        </tr>
        <tr>
            <td>Cast</td>
            <td>:</td>
            <td><input type="text" name="cast" placeholder="Input cast"></td>
        </tr>
        <tr>
            <td>Sypnosis</td>
            <td>:</td>
            <td><textarea name="sypnosis" id="" cols="30" rows="10" placeholder="Input Sypnosis"></textarea></td>
        </tr>
        <tr>
            <td>Writer</td>
            <td>:</td>
            <td><input type="text" name="writer" placeholder="Input writer"></td>
        </tr>
        <tr>
            <td><input type="submit" name="insert" value="Add Movie!"></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</form>