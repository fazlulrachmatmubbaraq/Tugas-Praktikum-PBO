<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Kamar</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="id_kamar" placeholder="id_kamar" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tipe Kamar</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="tipe_kamar" placeholder="tipe_kamar" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Fasilitas</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="fasilitas" placeholder="fasilitas" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sistem Pembayaran</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="stm_byr" placeholder="stm_byr" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> ID Pemilik</label>
				<div class="col-sm-5">
				<div class="control-label">
					<select name="id_pemilik" class="form-control">
					<option>Pilih Pemilik</option>
						<?php
						$sql_pemilik = mysqli_query($koneksi, "SELECT * FROM pemilik") or die (mysqli_error($koneksi));
						while ($data_pemilik = mysqli_fetch_array($sql_pemilik)) {
						echo '<option velue="'.$data_pemilik['id_pemilik'].'">'.$data_pemilik['id_pemilik'].'</option>';
						}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-kamar" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
	<?php
				if(isset($_POST['simpan'])){
					$id_kamar = $_POST['id_kamar'];
					$tipe_kamar = $_POST['tipe_kamar'];
                    $fasilitas = $_POST['fasilitas'];
					$stm_byr = $_POST['stm_byr'];
					$id_pemilik = $_POST['id_pemilik'];
                    $insert = mysqli_query($koneksi, "INSERT INTO kamar VALUES (null, '$tipe_kamar', '$fasilitas', '$stm_byr', '$id_pemilik')");

					if($insert) {
						echo 'Berhasil Upload';
					} else {
						echo 'Gagal Upload';
					}
				}
				?>
