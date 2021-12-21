<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from pemilik WHERE id_pemilik='".$_GET['kode']."'";
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
							<?php echo $data_cek['id_pemilik']; ?>
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
			</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pengguna" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

