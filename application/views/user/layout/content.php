 <!-- Reservation Grid Section -->
 <div class="reservation mb-3">
      <section id="reservation">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>RESERVASI</h2><br>
              <img src="<?php echo base_url(); ?>assets/img/hr.png"><br><br>
              <h4 class="section-subheading text-muted">Pilih Poliklinik</h4>
            </div>
          </div>
          <div class="row mt-4">
            <?php foreach ($poli as $row): ?>
            <div class="col-sm-4 col-6 poliklinik-item">
              <?php if ($this->session->userdata('status') == 'login'):?>
                <a class="poliklinik-link" data-toggle="modal" href="#poliklinikModal1" onclick="hmm('<?=$row->id_poli?>')">
                <img class="img-fluid" src="<?php echo base_url();?>assets/upload/<?php echo $row->gambar?>" width="200" height="200">
              </a>
              <?php else: ?>
                <a class="poliklinik-link" href="<?php echo base_url(); ?>login_pasien">
                <img class="img-fluid" src="<?php echo base_url();?>assets/upload/<?php echo $row->gambar?>" width="200" height="200">
              </a>
              <?php endif; ?>
              <div class="poliklinik-caption text-center">
                <h4><?php echo $row->nama_poli; ?></h4>
              </div>
               <br>
               <br>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
</div>
<script>
 function hmm(idnya) {
  $(document).ready(function(){
  document.getElementById('poli').value=idnya;
  var id_poli = idnya;
            $('#dokter').prop('disabled',false);
            $.ajax({
              url: "http://localhost/xmalang/Test/get_autofill",
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
          });
} 
</script>