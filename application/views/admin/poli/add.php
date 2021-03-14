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
						<?php echo form_open_multipart('poli/add/');?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Nama Poli:</label>
									<input type="text" name="nama_poli" value="<?php echo $this->input->post('nama_poli'); ?>" class="form-control"
									 id="nama_poli" placeholder="Masukkan Nama Poli" />
									<span class="text-danger">
										<?php echo form_error('nama_poli');?></span>
								</div>
								<div class="form-group">
									<label>Lokasi:</label>
									<input type="text" placeholder="Masukkan Lokasi Poli" name="lokasi_poli" value="<?php echo $this->input->post('lokasi_poli'); ?>"
									 class="form-control" id="lokasi_poli" />
									<span class="text-danger">
										<?php echo form_error('lokasi_poli');?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Gambar:</label>
									<input type="file" name="gambar" value="<?php echo $this->input->post('gambar'); ?>" class="form-control" id="gambar" />
									<span class="text-danger">
										<?php echo form_error('gambar');?></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div>
								<button type="submit" class="btn btn-success btn-wd">Simpan</button>
								<a href="<?php echo base_url('poli/'); ?>" class="btn btn-danger btn-wd">Batal</a>
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
