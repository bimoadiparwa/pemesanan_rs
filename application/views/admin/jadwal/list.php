<div class="content">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="header">
                    <div class="pull-right">
							<a href="<?php echo base_url('jadwal/add'); ?>" class="btn btn-success ti-plus"></a>
						</div>
						<h4 class="title">
							<?php echo $title ?>
						</h4>
					</div>
					<div class="content table-responsive table-full-width">
						<table id="tabel" class="table table-striped">

							<thead>
								<tr>
									<th>No.</th>
                                    <th>Nama Dokter</th>
                                    <th>Spesialis</th>
									<th>Hari</th>
									<th>Jam</th>
								</tr>
							</thead>
							<tbody>
								<?php 
                                        $no=1;
                                    ?>
								<?php foreach($jadwal as $row)
                                    {?>
								<tr>
									<td>
										<?php echo $no++;?>
									</td>
									<td>
										<?php echo $row->nama_dokter; ?>
                                    </td>
                                    <td>
										<?php echo $row->spesialis; ?>
									</td>
									<td>
										<?php echo $row->hari; ?>
									</td>
									<td>
										<?php echo $row->jam; ?>
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
