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
						<?php echo form_open('dokter/add/');?>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Nama Dokter:</label>
									<input type="text" name="nama_dokter" class="form-control" id="nama_dokter" placeholder="Masukkan Nama Dokter" />
									<span class="text-danger">
										<?php echo form_error('nama_dokter');?></span>
								</div>
								<div class="form-group">
									<label>Nama Poli:</label>
									<select name="id_poli" class="form-control">
										<option value="">Pilih Poli</option>
										<?php foreach ($poli as $p): ?>
										<option value="<?php echo $p->id_poli; ?>">
											<?php echo $p->nama_poli; ?>
										</option>
										<?php endforeach ?>
									</select>
									<span class="text-danger">
										<?php echo form_error('id_poli');?></span>
								</div>
								<div class="form-group">
									<label>Jenis Kelamin:</label>
									<select name="jk_dokter" class="form-control">
										<option value="">Pilih Jenis Kelamin</option>
										<option value="L"> Laki-Laki</option>
										<option value="P"> Perempuan</option>
									</select>
									<span class="text-danger">
										<?php echo form_error('jk_dokter');?></span>
								</div>
								<div class="form-group">
									<label>Tanggal Lahir:</label>
									<input type="date" name="ttl_dokter" value="<?php echo $this->input->post('ttl_dokter'); ?>" class="form-control"
									 id="ttl_dokter" placeholder="Masukkan Tanggal Lahir" />
									<span class="text-danger">
										<?php echo form_error('ttl_dokter');?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>No. Telp:</label>
									<input type="text" name="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" class="form-control" id="no_telp"
									 placeholder="Masukkan No. Telp Dokter" />
									<span class="text-danger">
										<?php echo form_error('no_telp');?></span>
								</div>
								<div class="form-group">
									<label>Alamat:</label>
									<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat"
									 placeholder="Masukkan Alamat Dokter" />
									<span class="text-danger">
										<?php echo form_error('alamat');?></span>
								</div>
								<div class="form-group">
									<label>Spesialis:</label>
									<input type="text" name="spesialis" value="<?php echo $this->input->post('spesial'); ?>" class="form-control"
									 id="spesialis" placeholder="Masukkan Spesialis Dokter" />
									<span class="text-danger">
										<?php echo form_error('spesial');?></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div>
								<button type="submit" class="btn btn-success btn-wd">Simpan</button>
								<a href="<?php echo base_url('dokter/'); ?>" class="btn btn-danger btn-wd">Batal</a>
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
