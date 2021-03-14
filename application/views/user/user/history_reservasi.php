<div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $title ?></h4>
                                <p class="category">List of all History</p>
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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                    ?>
                                    <?php foreach ($history as $row ) { ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nama_pasien']; ?></td>
                                        <td><?php echo $row['nama_dokter']?></td>
                                        <td><?php echo $row['nama_poli']; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td><?php echo $row['waktu']; ?></td>
                                        <td>
                                        </form>
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