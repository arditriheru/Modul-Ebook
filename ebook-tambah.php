            <form method="post" action="ebook-proses-tambah.php" role="form" 
            	enctype="multipart/form-data" onSubmit="cek()">
              <div class="form-group">
              	<div class="form-group">
                <label>Kategori</label><font color=red><small> *Harus diisi</small></font>
                <select class="form-control" type="text" name="kategori">
                  <option>Umum</option>
                  <option>Manajemen</option>
                  <option>Medis</option>
                  <option>Keperawatan</option>
                  <option>Perundangan</option>
                </select>
              </div> 
                <label>Judul Buku</label><font color=red><small> *Harus diisi</small></font>
                <input class="form-control" type="text" name="judul" id="judul" placeholder="Masukkan Judul Buku..">
              </div>
              <div class="form-group">
                <label>Penulis</label>
                <input class="form-control" type="text" name="penulis" id="penulis" placeholder="Masukkan Penulls Buku..">
              </div>
              <div class="form-group">
                <label>Penerbit</label>
                <input class="form-control" type="text" name="penerbit" id="penerbit" placeholder="Masukkan Penerbit..">
              </div>
                <div class="form-group">
                <label>Dokumen</label><font color=red><small> *Harus diisi</small></font>
                <input type="file" name="dokumen" id="dokumen">
              </div><br><br>
              <button type="submit" class="btn btn-success">Tambah</button>
              <button type="reset" class="btn btn-warning">Reset</button>  
            </form>
      <script type="text/javascript">
				  function cek() {
					var kategori 	= document.getElementById("kategori").value;
					var judul 		= document.getElementById("judul").value;
					var dokumen 	= document.getElementById("dokumen").value;
					if (kategori != "" && judul != "" && dokumen!="") {
						return true;
					}else{
						alert('Anda harus mengisi judul & dokumen!');
					}
				}
			</script>
