<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM kamar WHERE id_kamar='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post">
		<div class="card-body">

			<input type='hidden' class="form-control" name="id_kamar" value="<?php echo $data_cek['id_kamar']; ?>"
			 readonly/>
			 <div class="form-group row">
				<label class="col-sm-2 col-form-label">Id Pemilik</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="id_pemilik" name="id_pemilik" value="<?php echo $data_cek['id_pemilik']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tipe Kamar</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" value="<?php echo $data_cek['tipe_kamar']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Fasilitas</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="fasilitas" name="fasilitas" value="<?php echo $data_cek['fasilitas']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sistem Pembayaran</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="stm_byr" name="stm_byr" value="<?php echo $data_cek['stm_byr']; ?>"
					/>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-profil" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE kamar SET 
    id_pemilik='".$_POST['id_pemilik']."', 
    tipe_kamar='".$_POST['tipe_kamar']."', 
    fasilitas='".$_POST['fasilitas']."'
	stm_byr='".$_POST['stm_byr']."'
    WHERE id_kamar='".$_POST['id_kamar']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-kamar';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-kamar';
        }
      })</script>";
    }}
