<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">

			<?php if($this->session->flashdata('flash')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil
				<?php echo $this->session->flashdata('flash'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<?php endif; $this->session->unset_userdata('flash');  ?>


			<h2>Data Mahasiswa</h2>




			<a href="<?php echo base_url(); ?>mahasiswa/tambah">
				<input type="button" class="btn btn-primary my-2" value="Tambah Data">
			</a>

			<form action="" method="post">
			<div class="input-group my-2">
				<input type="text" name="search" class="form-control" placeholder="Cari data Mahasiswa">
				<div class="input-group-append">
					<input type="submit"  class="btn btn-primary" name="btnSearch" value="Cari">
				</div>
			</div>
			</form>

			<?php if(empty($mahasiswa)) : ?>
			<div class="my-2 alert alert-danger">
				Data Mahasiswa Tidak Ditemukan
			</div>
			<?php endif; ?>
			
			<ul class="list-group">
				<?php foreach($mahasiswa as $mhs) : ?>
				<li class="list-group-item"><?php echo $mhs['nama']; ?>
					<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin?');">hapus</a>

					<a href="<?= base_url(); ?>mahasiswa/update/<?= $mhs['id']; ?>" class="badge badge-primary float-right">ubah</a>

					<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-success float-right">detail</a>

				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>