<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM penyewa WHERE id_kamar='".$_GET['kode']."'";
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
				
		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pengguna" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_pengguna SET
        nama_pengguna='".$_POST['nama_pengguna']."',
        username='".$_POST['username']."',
        password='".$_POST['password']."',
        level='".$_POST['level']."'
        WHERE id_pengguna='".$_POST['id_pengguna']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pengguna';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pengguna';
        }
      })</script>";
    }}
?>

<script type="text/javascript">
    function change()
    {
    var x = document.getElementById('pass').type;

    if (x == 'password')
    {
        document.getElementById('pass').type = 'text';
        document.getElementById('mybutton').innerHTML;
    }
    else
    {
        document.getElementById('pass').type = 'password';
        document.getElementById('mybutton').innerHTML;
    }
    }
</script>