<?php include "../session-start.php";?>
<?php 
  include '../koneksi.php';
  $id_buku = $_GET['id_buku'];
  $data = mysqli_query($koneksi,"select * from buku where id_buku='$id_buku';");
  while($d = mysqli_fetch_array($data)){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard - E-Book</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- Add custom CSS here -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script type="text/javascript" src="chartjs/Chart.js"></script>
  </head>
  <body>
  <nav>
    <div id="wrapper">
        </div><!-- /.navbar-collapse -->
      </nav>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <small>E-Book</small></h1>
            <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><i class="fa fa-pencil"></i> Edit</a></li>
            </ol>  
            <?php include "../notifikasi1.php"?>
          </div>
        </div><!-- /.row -->
  		<div class="row">
  			<div class="col-lg-12">
          	<form method="post" action="ebook-proses-edit.php?id_buku=<?php echo $d['id_buku']; ?>" role="form" 
              enctype="multipart/form-data" onSubmit="cek()">
              <div class="form-group">
                <div class="form-group">
                <label>Kategori</label><font color=red><small> *Harus diisi</small></font>
                <select class="form-control" type="text" name="kategori" value="<?php echo $d['kategori']; ?>">
                  <option>Umum</option>
                  <option>Manajemen</option>
                  <option>Medis</option>
                  <option>Keperawatan</option>
                  <option>Perundangan</option>
                </select>
              </div> 
                <label>Judul Buku</label><font color=red><small> *Harus diisi</small></font>
                <input class="form-control" type="text" name="judul" id="judul" value="<?php echo $d['judul']; ?>">
              </div>
              <div class="form-group">
                <label>Penulis</label>
                <input class="form-control" type="text" name="penulis" id="penulis" value="<?php echo $d['penulis']; ?>">
              </div>
              <div class="form-group">
                <label>Penerbit</label>
                <input class="form-control" type="text" name="penerbit" id="penerbit" value="<?php echo $d['penerbit']; ?>">
              </div>
                <div class="form-group">
                <label>Dokumen</label><font color=red><small> *Harus diisi</small></font>
                <input type="file" name="dokumen" id="dokumen" value="<?php echo $d['dokumen']; ?>">
              </div><br><br>
              <button type="submit" class="btn btn-success">Perbarui</button>
              <button type="reset" class="btn btn-warning">Reset</button>  
            </form>
          <?php }?>
      <script type="text/javascript">
          function cek() {
          var kategori  = document.getElementById("kategori").value;
          var judul     = document.getElementById("judul").value;
          var dokumen   = document.getElementById("dokumen").value;
          if (kategori != "" && judul != "" && dokumen!="") {
            return true;
          }else{
            alert('Anda harus mengisi judul & dokumen!');
          }
        }
      </script>

            </div>
          </div>
        </div><!-- /.row -->
        <div class="row">
       <?php include "../copyright.php"?>
		</div>
<br><br>
      </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!-- Page Specific Plugins -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="../js/morris/chart-data-morris.js"></script>
    <script src="../js/tablesorter/jquery.tablesorter.js"></script>
    <script src="../js/tablesorter/tables.js"></script>
  </body>
</html>
