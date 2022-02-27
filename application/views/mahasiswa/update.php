<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			<h2>Update Data Mahasiswa</h2>


				<form method="post" action="">

				  <input type="hidden" class="form-control" id="nama" placeholder="Nama" name="id" value="<?= $mahasiswa['id'] ?>">
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
				    <small class="text-form text-danger"><?php echo form_error('nama'); ?></small>
				  </div>


				  <div class="form-group">
				    <label for="nama">NRP</label>
				    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP" value="<?= $mahasiswa['nrp'] ?>">
				    <small class="text-form text-danger"><?php echo form_error('nrp'); ?></small>
				  </div>

				  <div class="form-group">
				    <label for="nama">Jurusan</label>
				    <input type="text" class="form-control" id="Jurusan" placeholder="Jurusan" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>">
				    <small class="text-form text-danger"><?php echo form_error('jurusan'); ?></small>
				  </div>


				  <button type="submit" class="btn btn-primary float-right">Update</button>
				</form>


		</div>
	</div>
</div>