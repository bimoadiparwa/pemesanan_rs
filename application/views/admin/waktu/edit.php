<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title; ?></h4>
                            </div>
                            <div class="content">
                            <?php echo form_open_multipart('waktu/edit/'.$waktu['id_waktu']);?>
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hari:</label>
                                                <input type="text" name="hari" class="form-control border-input" value="<?php echo ($this->input->post('hari') ? $this->input->post('hari') : $waktu['hari']); ?>">
                                                <span class="text-danger"><?php echo form_error('hari');?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Waktu:</label>
                                                <input type="time" name="waktu" class="form-control border-input" value="<?php echo ($this->input->post('waktu') ? $this->input->post('waktu') : $waktu['waktu']); ?>">
                                                <span class="text-danger"><?php echo form_error('waktu');?></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success btn-fill btn-wd">Simpan</button>
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