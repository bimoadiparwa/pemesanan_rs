<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Dashboard Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css');?>" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css"/>
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet"/>

    <link href="<?php echo base_url('assets/css/paper-dashboard.css');?>" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    <link href="<?php echo base_url('assets/css/themify-icons.css');?>" rel="stylesheet">

</head>
<body>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">COBA DEPENDENT SELECT</h4>
                            </div>
                            <div class="content">
                            <?php echo form_open();?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            	<label>Poli</label>
                                            	<select name="poli" id="poli" class="form-control">
                                            		<option value="">Select Poli</option>
                                            		<?php foreach ($poli as $p): ?>
                                            			<option value="<?php echo $p->id_poli;?>"><?php echo $p->nama_poli;?></option>
                                            		<?php endforeach; ?>
                                            	</select>
                                            </div>
                                           
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Dokter</label>
                                            	<select name="dokter" id="dokter" class="form-control" disabled="">
                                            		<option value="">Select Dokter</option>
                                            	</select>
                                            </div>
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
 </body>

<script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap4.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
    $('#tabel').DataTable( {
        "paging":   true,
        "ordering": true,
        "info":     true
    } );
} );
</script>
<script type="text/javascript">
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
</script>
</html>