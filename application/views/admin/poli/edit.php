<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title; ?></h4>
                            </div>
                            <div class="content">
                            <?php echo form_open_multipart('poli/edit/'.$poli['id_poli']);?>
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Poli:</label>
                                                <input type="text" name="nama_poli" class="form-control border-input" value="<?php echo ($this->input->post('nama_poli') ? $this->input->post('nama_poli') : $poli['nama_poli']); ?>">
                                                <span class="text-danger"><?php echo form_error('nama_poli');?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Lokasi:</label>
                                                <input type="text" name="lokasi_poli" class="form-control border-input" 
                                                value="<?php echo ($this->input->post('lokasi_poli') ? $this->input->post('lokasi_poli') : $poli['lokasi_poli']); ?>">
                                                <span class="text-danger"><?php echo form_error('lokasi_poli');?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gambar:</label>
                                                <input type="file" name="gambar" class="form-control border-input">
                                                <input type="hidden" name="old_gambar"  value="<?php echo ($this->input->post('gambar') ? $this->input->post('gambar') : $poli['gambar']); ?>">
                                                <span class="text-danger"><?php echo form_error('gambar');?></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success btn-fill btn-wd">Save</button>
                                            <button type="cancel" class="btn btn-success btn-fill btn-wd">Batal</button>
                                        
                                        </div>
                                        
                                    </div>
	

                                    <!--<div class="">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Product</button>
                                    </div>-->
                                    <div class="clearfix"></div>
                                    <?php echo form_close(); ?>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>