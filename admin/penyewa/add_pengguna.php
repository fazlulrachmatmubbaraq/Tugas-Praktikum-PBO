<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Kamar</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_kamar" name="id_kamar" placeholder="id_kamar" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Masa Kontrak</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="masa_kontrak" name="masa_kontrak" placeholder="masa_kontrak">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Penyewa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" placeholder="nama_penyewa">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No KTP</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="no_ktp">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Hp</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kesanggupan Membayar</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="kesanggupan_membayar" name="kesanggupan_membayar" placeholder="kesanggupan_membayar">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="status" name="status" placeholder="status">
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pengguna" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
				if(isset($_POST['simpan'])){
					$id_kamar = $_POST['id_kamar'];
					$masa_kontrak = $_POST['masa_kontrak'];
					$nama_penyewa = $_POST['nama_penyewa'];
					$no_ktp = $_POST['no_ktp'];
					$no_hp = $_POST['no_hp'];
					$kesanggupan_membayar = $_POST['kesanggupan_membayar'];
					$status = $_POST['status'];
				
					$insert = mysqli_query($koneksi, "INSERT INTO penyewa VALUES ( '$id_kamar','$masa_kontrak','$nama_penyewa', '$no_ktp','$no_hp', '$kesanggupan_membayar', '$status')");

					if($insert) {
						echo 'Berhasil Upload';
					} else {
						echo 'Gagal Upload';
					}
				}
			?>  
     <!-- selesai proses simpan data -->