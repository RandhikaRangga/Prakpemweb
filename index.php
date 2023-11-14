<?php
include "koneksi.php";
?>

<center><img src="logo.jpg" alt=""></center>
<h1><b>Welcome <?php echo $_SESSION['username'] ?>!</b></h1>
<p>Add movie you want with some detail</p>
<a href="insert.php"><button>Add New Movie</button></a>
<?php
$query = mysqli_query($conn, "select * from watchlist order by id");
while($data = mysqli_fetch_array($query)){
?>
    
    <b><?php echo "<br>".$data['id'].". ".$data['title']; ?></b>
    <p>Played by <?php echo $data['cast']; ?></p>
    <p>Written by <?php echo $data['writer']; ?></p>
    <p><?php echo $data['sypnosis'];?></p>
    <a href='update.php?id=<?php echo $data['id']?>'>Update</a> | <a href='delete.php?id=<?php echo $data['id'] ?>'>Hapus</a></td><br>
<?php
}
?>
<br><a href="logout.php"><button>Logout</button></a>