<?php 
  include '../koneksi.php';
  $id_buku = $_GET['id_buku'];
  $data = mysqli_query($koneksi,"select * from buku where id_buku='$id_buku';");
  while($d = mysqli_fetch_array($data)){
?>
<!DOCTYPE html>
<html lang="en">
  <body>
    <embed width="100%" height="1000" src="upload/<?php echo $d['dokumen']; ?>"
  <?php 
    }
  ?>
  </body>
</html>