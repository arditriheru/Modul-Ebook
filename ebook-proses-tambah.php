<?php 

// Baca lokasi file sementar dan nama file dari form (dokumen)
$lokasi_file = $_FILES['dokumen']['tmp_name'];
$nama_file   = $_FILES['dokumen']['name'];
// Tentukan folder untuk menyimpan file
$folder 	= "upload/$nama_file";
$judul 		= $_POST['judul'];
$penulis 	= $_POST['penulis'];
$penerbit 	= $_POST['penerbit'];
$tahun    	= date("Ymd");
$kategori 	= $_POST['kategori'];
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  
  // Masukkan informasi file ke database
  include '../koneksi.php';

  mysqli_query($koneksi,"insert into buku
  	values('','$judul','$penulis','$penerbit','$tahun','$kategori','$nama_file')");
}
else{
  echo "File gagal di upload";
}
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
?>