<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title; ?></h4>
                            </div>
                            <div class="content">
                            <?php echo form_open_multipart('waktu/add/');?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Waktu:</label>
                                                <input type="time" name="waktu" value="<?php echo $this->input->post('waktu'); ?>" class="form-control" id="waktu"
                                                placeholder="Masukkan Waktu" />
                                                <span class="text-danger"><?php echo form_error('waktu');?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success btn-wd">Simpan</button>
                                            <a href="<?php echo base_url('waktu/'); ?>" class="btn btn-danger btn-wd">Batal</a>
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