<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title; ?></h4>
                            </div>
                            <div class="content">
                            <?php echo form_open('pasien/edit/'.$pasien['id_pasien']);?>
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Pasien:</label>
                                                <input type="text" name="nama_pasien" class="form-control border-input" value="<?php echo ($this->input->post('nama_pasien') ? $this->input->post('nama_pasien') : $pasien['nama_pasien']); ?>">
                                                <span class="text-danger"><?php echo form_error('nama_pasien');?></span>
                                            </div>

                                            <div class="form-group">
                                                <label>Tanggal Lahir:</label>
                                                <input type="date" name="ttl_pasien" class="form-control border-input" 
                                                value="<?php echo ($this->input->post('ttl_pasien') ? $this->input->post('ttl_pasien') : $pasien['ttl_pasien']); ?>">
                                                <span class="text-danger"><?php echo form_error('ttl_pasien');?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin:</label>
                                                <select name="jk_pasien" class="form-control">
                                                    <option value="">select</option>
                                                    <?php 
                                                    $jk_pasien_values = array(
                                                        'L'=>'Laki-Laki',
                                                        'P'=>'Perempuan',
                                                    );

                                                    foreach($jk_pasien_values as $value => $display_text)
                                                    {
                                                        $selected = ($value == $pasien['jk_pasien']) ? ' selected="selected"' : "";

                                                        echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                                    } 
                                                    ?>
                                                </select>
                                                <span class="text-danger"><?php echo form_error('jk_pasien');?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat:</label>
                                                <input name="alamat" class="form-control border-input" 
                                                value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $pasien['alamat']); ?>">
                                                <span class="text-danger"><?php echo form_error('alamat');?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. Telp:</label>
                                                <input type="text" name="no_telp" class="form-control border-input" 
                                                value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $pasien['no_telp']); ?>">
                                                <span class="text-danger"><?php echo form_error('no_telp');?></span>
                                            </div>

                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="text" name="email" class="form-control border-input" 
                                                value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $pasien['email']); ?>">
                                                <span class="text-danger"><?php echo form_error('email');?></span>
                                            </div>

                                            <div class="form-group">
                                                <label>Password:</label>
                                                <input type="text" name="password" class="form-control border-input" readonly="readonly"
                                                value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $pasien['password']); ?>">
                                                <span class="text-danger"><?php echo form_error('password');?></span>
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