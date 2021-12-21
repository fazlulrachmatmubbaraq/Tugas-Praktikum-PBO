<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM pemilik WHERE id_pemilik='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
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
				<label class="col-sm-2 col-form-label">Biaya</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="biaya" name="biaya" placeholder="Biaya" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Kos</label>
				<div class="col-sm-6">
					<input type="file" id="foto_kos" name="foto_kos">
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pemilik" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>

	

<?php
	$sumber = @$_FILES['foto_kos']['tmp_name'];
	$target = 'foto_kos/';
	$nama_file = @$_FILES['foto_kos']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['foto_kos'];
            if (file_exists("foto_kos/$foto")){
            unlink("foto_kos/$foto");}

        $sql_ubah = "UPDATE pemilik SET
			id_kamar='".$_POST['id_kamar']."',
			nama='".$_POST['nama_pemilik']."',
			alamat='".$_POST['alamat']."',
			no_hp='".$_POST['biaya']."',
			foto_kos='".$nama_file."'		
            WHERE id_pemilik='".$_POST['id_pemilik']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE pemlik SET
			id_kamar='".$_POST['id_kamar']."',
			nama='".$_POST['nama_pemilik']."',
			alamat='".$_POST['alamat']."',
			no_hp='".$_POST['biaya']."',
			foto_kos='".$nama_file."'		
            WHERE id_pemilik='".$_POST['id_pemilik']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pemilik';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pemilik';
            }
        })</script>";
    }
}

