<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			<h2>Detail Data Mahasiswa</h2>


				<form method="post" action="">
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
				  </div>


				  <div class="form-group">
				    <label for="nama">NRP</label>
				    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP" value="<?= $mahasiswa['nrp'] ?>">
				  </div>

				  <div class="form-group">
				    <label for="nama">Jurusan</label>
				    <input type="text" class="form-control" id="Jurusan" placeholder="Jurusan" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>">
				  </div>


				  <a href="<?= base_url(); ?>/mahasiswa" class="btn btn-secondary float-left">back</a>
				</form>


		</div>
	</div>
</div>