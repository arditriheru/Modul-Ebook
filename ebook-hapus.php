<?php 
  include '../koneksi.php';
  $id_buku = $_GET['id_buku'];
  $data = mysqli_query($koneksi,"delete from buku where id_buku='$id_buku';");
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
?>