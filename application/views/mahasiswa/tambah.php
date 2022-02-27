<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			<h2>Tambah Data Mahasiswa</h2>


				<?php if(validation_errors()) : ?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php endif; ?>

				<form method="post" action="">
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
				  </div>


				  <div class="form-group">
				    <label for="nama">NRP</label>
				    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP">
				  </div>

				  <div class="form-group">
				    <label for="nama">Jurusan</label>
				    <input type="text" class="form-control" id="Jurusan" placeholder="Jurusan" name="jurusan">
				  </div>


				  <button type="submit" class="btn btn-primary float-right">Submit</button>
				</form>




		</div>
	</div>
</div>