<div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <div class="pull-right ">
                                <a href="<?php echo base_url('poli/add'); ?>" class="btn btn-success ti-plus"></a>
                            </div>
                                <h4 class="title"><?php echo $title ?></h4>
                                <p class="category">List of all Poli</p>
                                
                            </div>
                            
                            
                            <div class="content table-responsive table-full-width">
                            
                                <table id="tabel" class="table table-striped">
                                    
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th width="150">Nama Poli</th>
                                        <th>Gambar</th>
                                        <th>Lokasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                    ?>
                                    <?php foreach($poli as $row)
                                    {?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $row->nama_poli; ?></td>
                                        <td><img  src="<?php echo base_url();?>assets/upload/<?php echo $row->gambar;?>" width="80" height="80"></td>
                                        <td><?php echo $row->lokasi_poli; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('poli/edit/'.$row->id_poli); ?>"class='btn btn-sm btn-info ti-pencil-alt'></a>
												<a href="<?php echo base_url('poli/remove/'.$row->id_poli); ?>"class='btn btn-sm btn-danger ti-trash'></a>
                            
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
        