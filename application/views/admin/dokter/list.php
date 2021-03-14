<div class="content">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<div class="pull-right">
							<a href="<?php echo base_url('dokter/add'); ?>" class="btn btn-success ti-plus"></a>
						</div>
						<h4 class="title">
							<?php echo $title ?>
						</h4>
						<p class="category">Daftar semua Dokter</p>
					</div>
					<div class="content table-responsive table-full-width">
						<table id="tabel" class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Poli</th>
									<th>TTL</th>
									<th>JK</th>
									<th>Alamat</th>
									<th>No. Telp</th>
									<th>Spesialis</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php 
                                        $no=1;
                                    ?>
								<?php foreach($dokter as $row)
                                    {?>
								<tr>
									<td>
										<?php echo $no++;?>
									</td>
									<td>
										<?php echo $row->nama_dokter; ?>
									</td>
									<td>
										<?php echo $row->nama_poli; ?>
									</td>
									<td>
										<?php echo $row->ttl_dokter; ?>
									</td>
									<td>
										<?php echo $row->jk_dokter; ?>
									</td>
									<td>
										<?php echo $row->alamat; ?>
									</td>
									<td>
										<?php echo $row->no_telp; ?>
									</td>
									<td>
										<?php echo $row->spesialis; ?>
									</td>
									<td>
										<a href="<?php echo base_url('dokter/edit/'.$row->id_dokter); ?>" class='btn btn-sm btn-info ti-pencil-alt'></a>
										<a href="<?php echo base_url('dokter/remove/'.$row->id_dokter); ?>" class='btn btn-sm btn-danger ti-trash'></a>
										<!-- <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                            <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                            <button class="btn btn-sm btn-primary ti-view-list-alt"
                                                    title="Details"></button>-->
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
