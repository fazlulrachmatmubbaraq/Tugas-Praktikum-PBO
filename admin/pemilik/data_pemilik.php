<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pemilik</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pemilik" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Id Pemilik</th>
						<th>Nama Pemilik</th>
						<th>Alamat</th>
						<th>Biaya</th>
						<th>Foto Kos</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from pemilik");
              while ($data= $sql->fetch_assoc()) {
            ?>
					<tr>			
					
						<td><?php echo $data['id_pemilik']; ?></td>
						<td><?php echo $data['nama_pemilik']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td><?php echo $data['biaya']; ?></td>
						<td><img src="./foto_kos/<?php echo $data['foto_kos']; ?>" width="70px"></td>
						<td>
							<a href="?page=view-pemilik&kode=<?php echo $data['id_pemilik']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							<a href="?page=del-pemilik&kode=<?php echo $data['id_pemilik']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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