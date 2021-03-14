<div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title ?></h4>
                                <p class="category">List of all pasien</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table id="tabel" class="table table-striped">
                                    
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>TTL</th>
                                        <th>JK</th>
                                        <th>Alamat</th>
                                        <th>No. Telp</th>
                                        <th>E-Mail</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                    ?>
                                    <?php foreach($pasien as $row)
                                    {?>
                                    <tr>
                                   
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $row->nama_pasien; ?></td>
                                        <td><?php echo $row->ttl_pasien?></td>
                                        <td><?php echo $row->jk_pasien; ?></td>
                                        <td><?php echo $row->alamat; ?></td>
                                        <td><?php echo $row->no_telp; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('pasien/edit/'.$row->id_pasien); ?>"class='btn btn-sm btn-info ti-pencil-alt'></a>
												<a href="<?php echo base_url('pasien/remove/'.$row->id_pasien); ?>"class='btn btn-sm btn-danger ti-trash'></a>
                                           <!-- <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                            <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                            <button class="btn btn-sm btn-primary ti-view-list-alt"
                                                    title="Details"></button>-->
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