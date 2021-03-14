<!-- Footer -->
<footer class="copyright text-white">
      <div class="container">
        <div class="row pt-3">
          <div class="col text-center">
            <img src="<?php echo base_url(); ?>assets/img/copyright.svg" width="3%">
            <p>Copyright 2019 PT Kelompok 5 IMK</p>
          </div>
        </div>
      </div>
    </footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
	<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
		<i class="fa fa-chevron-up"></i>
	</a>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="poliklinikModal1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Daftar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open('hal_user/add/')?>
				<div class="form-group">
					<label>Nama</label>
					<input type="hidden" name="id_pasien" class="form-control" readonly="" value="<?=$this->session->userdata('id_pasien') ;?>">

					<input type="text" name="nama_pasien" class="form-control" readonly="" value="<?php echo $this->session->userdata('nama_pasien') ; ?>">
				</div>
				<div class="form-group">
					<label>Poli</label>
					<select disabled name="id_poli" id="poli" class="form-control">
						<?php foreach ($poli as $p): ?>
						<option value="<?= $p->id_poli;?>">
							<?= $p->nama_poli;?>
						</option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Poli</label>
					<select hidden name="id_poli" id="poli" class="form-control">
						<?php foreach ($poli as $p): ?>
						<option value="<?= $p->id_poli;?>">
							<?= $p->nama_poli;?>
						</option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="form-group">
					<label><b>Catatan : * </b> Pastikan jadwal dokter sebelum reservasi <br><b><a href="<?= base_url('jadwal/')?>">klik
								DISINI</a></b></label>
				</div>

				<div class="form-group">
					<label>Dokter</label>
					<select name="id_dokter" id="dokter" class="form-control" disabled="">
						<option value="">Select Dokter</option>
					</select>
				</div>
				<div class="form-group">
					<label>Tanggal</label>
					<input type="date" class="form-control" name="tanggal" placeholder="Pilih Tanggal">
				</div>
				<div class="form-group">
					<label>Waktu</label>
					<a class="btn btn-primary form-control" data-toggle="collapse" href="#waktuanak" role="button" aria-expanded="false"
					 aria-controls="collapseExample">
						Pilih Waktu
					</a>
					<div class="collapse" id="waktuanak">
						<div class="card card-body">

							<div class="btn-group-toggle" data-toggle="buttons">
								<?php foreach ($waktu as $row) :?>
								<label class="btn btn-outline-primary">
									<input type="radio" name="id_waktu" autocomplete="off" value="<?php echo $row->id_waktu; ?>">
									<?php echo $row->waktu;?>
								</label>
								<?php endforeach;?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button onclick="sweet()" type="submit" class="btn btn-success btn-wd">Simpan</button>
				<a href="<?php echo base_url('hal_user/'); ?>" class="btn btn-danger btn-wd">Batal</a>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url(); ?>assets/js/freelancer.min.js"></script>
<!--<script type="text/javascript">
    $(document).ready(function(){
        $('#poli').on('change', function(){
          var id_poli = $(this).val();
          if(id_poli == '')
          {
            $('#dokter').prop('disabled',true);
          }
          else
          {
            $('#dokter').prop('disabled',false);
            $.ajax({
              url: "<?php echo base_url();?>Test/get_autofill",
              type: "POST",
              data: {'id_poli' : id_poli},
              dataType: 'json',
              success: function(data){
                $('#dokter').html(data);
              },
              error: function(){
                alert('Masih error');
              }
            });
          }
        });
    });
</script>-->
</body>

</html>
