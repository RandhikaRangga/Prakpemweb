<?php
include "koneksi.php";
session_start();

$upd=$_GET['id'];
if(isset($_POST['update'])){
    $title = $_POST['title'];
    $cast = $_POST['cast'];
    $sypnosis = $_POST['sypnosis'];
    $writer = $_POST['writer'];
        
    $sql = "update watchlist set title='$title',cast='$cast',sypnosis='$sypnosis',writer='$writer' ";
        $query = mysqli_query($conn,$sql);
        header("location:index.php");
}

$row = mysqli_fetch_array(mysqli_query($conn, "select * from watchlist where id='$upd' "));
if($row['id']!=""){
?>

<center><h1>Edit Movie Page</h1></center>
    <table align="center">
        <tr>
            <td><a href="index.php"><button>home</button></a></td>
            <td></td>
            <td></td>
        </tr>
        <form action="update.php" method="post">
        <tr>
            <td>Title</td>
            <td>:</td>
            <td><input type="text" name="title" placeholder="Input movie title" value="<?php echo $row['title']; ?>"></td>
        </tr>
        <tr>
            <td>Cast</td>
            <td>:</td>
            <td><input type="text" name="cast" placeholder="Input cast" value="<?php echo $row['cast']; ?>"></td>
        </tr>
        <tr>
            <td>Sypnosis</td>
            <td>:</td>
            <td><textarea name="sypnosis" id="" cols="30" rows="10" placeholder="Input Sypnosis"><?php echo $row['sypnosis']; ?></textarea></td>
        </tr>
        <tr>
            <td>Writer</td>
            <td>:</td>
            <td><input type="text" name="writer" placeholder="Input writer" value="<?php echo $row['writer']; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="update" value="Edit Data"></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</form>

<?php
}

?>