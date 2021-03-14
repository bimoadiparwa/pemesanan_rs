<div class="content">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="header">

						<h4 class="title">
							<?php echo $title ?>
						</h4>
					</div>
					<div class="content table-responsive table-full-width">
						<table id="tabel" class="table table-striped">

							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Pesan</th>
								</tr>
							</thead>
							<tbody>
								<?php 
                                        $no=1;
                                    ?>
								<?php foreach($kontak as $row)
                                    {?>
								<tr>
									<td>
										<?php echo $no++;?>
									</td>
									<td>
										<?php echo $row->nama_pengirim; ?>
									</td>
									<td>
										<?php echo $row->email_pengirim; ?>
									</td>
									<td>
										<?php echo $row->message; ?>
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
