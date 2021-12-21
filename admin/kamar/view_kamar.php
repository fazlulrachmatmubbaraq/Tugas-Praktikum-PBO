<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from kamar WHERE id_kamar='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Kamar</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="id_kamar" name="id_kamar" placeholder="id_kamar" required>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Id_Pemilik</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="id_pemilik" name="id_pemilik" placeholder="id_pemilik" required>
				</div>
			</div>

				<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tipe Kamar</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" placeholder="tipe_kamar" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Fasilitas</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="fasilitas" name="fasilitas" placeholder="fasilitas" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sistem Pembayaran</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="stm_byr" name="stm_byr" placeholder="stm_byr" required>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>