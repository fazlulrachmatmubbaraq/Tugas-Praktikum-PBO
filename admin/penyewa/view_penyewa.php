<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from penyewa WHERE id_kamar='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Pemilik</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Id Pemilik</b>
							</td>
							<td>:
								<?php echo $data_cek['id_pemilik']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Id Kamar</b>
							</td>
							<td>:
								<?php echo $data_cek['id_kamar']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Pemilik</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_pemilik']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Biaya</b>
							</td>
							<td>:
								<?php echo $data_cek['biaya']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Foto Kos</b>
							</td>
							<td>:
								<?php echo $data_cek['foto_kos']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-pegawai" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-pegawai.php?id_pemilik=<?php echo $data_cek['id_pemilik']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto Pegawai
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="foto_kos/<?php echo $data_cek['foto_kos']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['id_pemilik']; ?>
					-
					<?php echo $data_cek['nama_pemilik']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>