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
						<?php echo form_open('dokter/edit/'.$dokter['id_dokter']);?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Nama Dokter:</label>
									<input type="text" name="nama_dokter" class="form-control border-input" value="<?php echo $dokter['nama_dokter']; ?>">
									<span class="text-danger">
										<?php echo form_error('nama_dokter');?></span>
								</div>
								<div class="form-group">
									<label>Nama Poli:</label>
									<select name="id_poli" class="form-control">
										<option value="">Pilih Poli</option>
										<?php 
                                                    foreach($all_poli as $poli)
                                                    {
                                                        $selected = ($poli['id_poli'] == $dokter['id_poli']) ? ' selected="selected"' : "";

                                                        echo '<option value="'.$poli['id_poli'].'" '.$selected.'>'.$poli['nama_poli'].'</option>';
                                                    } 
                                                    ?>
									</select>
									<span class="text-danger">
										<?php echo form_error('id_poli');?></span>

								</div>
								<div class="form-group">
									<label>Jenis Kelamin:</label>
									<select name="jk_dokter" class="form-control">
										<option value="">select</option>
										<?php 
                                                    $jk_dokter_values = array(
                                                        'L' => 'Laki-Laki',
                                                        'P' => 'Perempuan'
                                                    );

                                                    foreach($jk_dokter_values as $value => $display_text)
                                                    {
                                                        $selected = ($value == $dokter['jk_dokter']) ? ' selected="selected"' : "";

                                                        echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                                    } 
                                                    ?>
									</select>
									<span class="text-danger">
										<?php echo form_error('jk_dokter');?></span>
								</div>
								<div class="form-group">
									<label>Tanggal Lahir:</label>
									<input type="date" name="ttl_dokter" class="form-control border-input" value="<?php echo $dokter['ttl_dokter']; ?>">
									<span class="text-danger">
										<?php echo form_error('ttl_dokter');?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>No. Telp:</label>
									<input type="text" name="no_telp" class="form-control border-input" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $dokter['no_telp']); ?>">
									<span class="text-danger">
										<?php echo form_error('no_telp');?></span>
								</div>
								<div class="form-group">
									<label>Alamat:</label>
									<input type="text" name="alamat" class="form-control border-input" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $dokter['alamat']); ?>">
									<span class="text-danger">
										<?php echo form_error('alamat');?></span>
								</div>
								<div class="form-group">
									<label>Spesialis:</label>
									<input type="text" name="spesialis" class="form-control border-input" value="<?php echo ($this->input->post('spesialis') ? $this->input->post('spesialis') : $dokter['spesialis']); ?>">
									<span class="text-danger">
										<?php echo form_error('spesialis');?></span>
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
