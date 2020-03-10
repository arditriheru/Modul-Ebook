         <h1>Koleksi</h1><br>
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                    <tr>
                    <th><center>No</th>
                    <th><center>Kategori</th>
                    <th><center>Judul</th>
                    <th><center>Penulis</th>
                    <th><center>Penerbit</th>
                    <th><center>Dokumen</th>
                    <th><center>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <!---------- Batas ----------->
                  <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,
                     "SELECT * FROM buku order by id_buku DESC;");
                    while($d = mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td><center><?php echo $no++; ?></td>
                    <td><center><?php echo $d['kategori']; ?></td>
                    <td><center><?php echo $d['judul']; ?></td>
                    <td><center><?php echo $d['penulis']; ?></td>
                    <td><center><?php echo $d['penerbit']; ?></td>
                    <td><div align="center">
                        <a href="dokumen-tampil.php?id_buku=<?php echo $d['id_buku']; ?>"
                        <button type="button" class="btn btn-warning">PDF</a>
                    </div>
                    </td>
                    <td>
                      <div align="center">
                        <a href="ebook-edit.php?id_buku=<?php echo $d['id_buku']; ?>"
                        <button type="button" class="btn btn-success">EDIT</a>
                          <a href="ebook-hapus.php?id_buku=<?php echo $d['id_buku']; ?>"
                        <button type="button" class="btn btn-danger">HAPUS</a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
         
                    </tbody>
                  </table>
                </div>