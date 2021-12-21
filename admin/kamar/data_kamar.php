<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Detail Kamar</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-kamar" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Id Kamar</th>
						<th>Id Pemilik</th>
						<th>Tipe Kamar</th>
						<th>Fasilitas</th>
						<th>Sistem Pembayaran</th>
						<th>Aksi</th>
					</tr>
				</thead>
			

				<?php
              $sql = $koneksi->query("SELECT  * FROM kamar");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td><?php echo $data['id_kamar']; ?></td>\
						<td><?php echo $data['id_pemilik']; ?></td>
						<td><?php echo $data['tipe_kamar']; ?></td>
						<td><?php echo $data['fasilitas']; ?></td>
						<td><?php echo $data['stm_byr']; ?></td>
						
						<td>
						<a href="?page=edit-kamar&kode=<?php echo $data['id_kamar']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							<a href="?page=del-kamar&kode=<?php echo $data['id_kamar']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
			  				</a>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->