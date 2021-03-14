<div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <div class="pull-right ">
                                <a href="<?php echo base_url('waktu/add'); ?>" class="btn btn-success ti-plus"></a>
                            </div>
                                <h4 class="title"><?php echo $title ?></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table id="tabel" class="table table-striped">
                                    
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Waktu</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                    ?>
                                    <?php foreach($waktu as $row)
                                    {?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $row->waktu; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('waktu/edit/'.$row->id_waktu); ?>"class='btn btn-sm btn-info ti-pencil-alt'></a>
												<a href="<?php echo base_url('waktu/remove/'.$row->id_waktu); ?>"class='btn btn-sm btn-danger ti-trash'></a>
                            
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
        