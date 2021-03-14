<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">
							<?php echo $title; ?>
						</h4>
					</div>
					<div class="content">
						<?php echo form_open('jadwal/add/');?>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Nama Dokter:</label>
									<select name="id_dokter" class="form-control">
										<option value="">Pilih Dokter</option>
										<?php foreach ($dokter as $d): ?>
										<option value="<?php echo $d->id_dokter; ?>">
											<?php echo $d->nama_dokter; ?>
										</option>
										<?php endforeach;?>
									</select>
								</div>

								<div class="form-group">
									<label>Hari Praktek:</label>
									<select name="hari" class="form-control">
										<option value="">Pilih Hari</option>
										<option value="Senin"> Senin</option>
										<option value="Selasa"> Selasa</option>
										<option value="Rabu"> Rabu</option>
										<option value="Kamis"> Kamis</option>
										<option value="Jumat"> Jumat</option>
										<option value="Sabtu"> Sabtu</option>
										<option value="Minggu"> Minggu</option>
									</select>
								</div>
								<div class="form-group">
									<label>jam Praktek:</label>
									<select name="jam" class="form-control">
										<option value="">Pilih jam</option>
										<option value="08.00 - 11.00"> 08.00 - 11.00</option>
										<option value="13.00 - 16.00"> 13.00 - 16.00</option>
										<option value="16.00 - 19.00"> 16.00 - 19.00</option>
										<option value="19.00 - 21.00"> 19.00 - 21.00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div>
								<button type="submit" class="btn btn-success btn-wd">Simpan</button>
								<a href="<?php echo base_url('jadwal/tampil/'); ?>" class="btn btn-danger btn-wd">Batal</a>
							</div>
						</div>
						<div class="clearfix"></div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
