<div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title ?></h4>
                                <p class="category">List of all Pesanan</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table id="tabel" class="table table-striped">
                                    
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Pasien</th>
                                        <th>Nama Dokter</th>
                                        <th>Poli</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                    ?>
                                    <?php foreach($pemesanan as $row)
                                    { ?>
                                    <tr>

                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $row->nama_pasien; ?></td>
                                        <td><?php echo $row->nama_dokter?></td>
                                        <td><?php echo $row->nama_poli; ?></td>
                                        <td><?php echo $row->tanggal; ?></td>
                                        <td><?php echo $row->waktu; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('pemesanan/edit/'.$row->id_pemesanan); ?>"class='btn btn-sm btn-info ti-pencil-alt'></a>
                                            <a href="<?php echo base_url('reservasi/add/'.$row->id_pemesanan); ?>"class='btn btn-sm btn-danger ti-trash'></a>
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