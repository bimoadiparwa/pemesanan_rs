<footer class="footer">
            <div class="container-fluid">
                <div class="copyright center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    , made with <i class="fa fa-heart heart"></i> by <a href="">Yota</a>
                </div>
            </div>
        </footer>

    </div>
</div>

</body>

<script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
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
</html>
