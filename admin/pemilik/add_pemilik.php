<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Pemilik</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="id_pemilik" name="id_pemilik" placeholder="Id Pemilik" required>
				</div>
			</div>

				<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pemilik</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="nama_pemilik" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Kos</label>
				<div class="col-sm-6">
					<input type="file" id="foto_kos" name="foto_kos">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Biaya</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="biaya" name="biaya" placeholder="Biaya" required>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pemilik" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
	<?php
				if(isset($_POST['simpan'])){
					$nama_pemilik = $_POST['nama_pemilik'];
					$alamat = $_POST['alamat'];
					$foto_kos = $_FILES['foto_kos']['name'];
					$source = $_FILES['foto_kos']['tmp_name'];
					$folder = './foto_kos/';
					$biaya = $_POST['biaya'];

					move_uploaded_file($source, $folder.$foto_kos);
					$insert = mysqli_query($koneksi, "INSERT INTO pemilik VALUES (null, '$nama_pemilik', '$alamat', '$foto_kos', '$biaya')");

					if($insert) {
						echo 'Berhasil Upload';
					} else {
						echo 'Gagal Upload';
					}
				}
				?>
</div>