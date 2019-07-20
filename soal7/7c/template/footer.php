<div class="container-fluid">
    <footer class="pt-4 my-md-4 pt-md-3 border-top">
        <div class="row">
            <div class="col-12 col-md center">
                &copy;  2019 - <a class="text-info" href="http://www.codesolusi.blogspot.com/">Ammar Pasifiky- <a class="text-info" href="http://www.github.com/tejojr/" target="_blank">GITHUB</a>
            </div>
        </div>
    </footer>
</div>
<!-- jQuery first, Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- fontawesome Plugin JS -->
<script type="text/javascript" src="assets/plugins/fontawesome-free-5.4.1-web/js/all.min.js"></script>
<!-- DataTables Plugin JS -->
<script type="text/javascript" src="assets/plugins/DataTables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/plugins/DataTables/js/dataTables.bootstrap4.min.js"></script>
<!-- SweetAlert Plugin JS -->
  <script src="assets/sweet/sweetalert.min.js"></script>
  <script src="assets/sweet/sweetalert-dev.js"></script>
<!-- inisialisi Data Tables-->
<script type="text/javascript">
    $(document).ready(function(){
        $('#data').DataTable();
    });
</script>
<script type="text/javascript">
    function edit() {
        $('.view_data').click(function() {
            var id = $(this).attr("id");

            $.ajax({
                url: 'modaledit.php',
                method: 'post',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#data-karyawan').html(data);
                    $('#modalEdit').modal("show");
                }
            });
        });
        // swal("Berhasil!", "Data Berhasil diubah!", "success");
    }
</script>
<script>
    jQuery(document).ready(function($){
        $('.delete-link').on('click',function(){
            var getLink = $(this).attr('href');
            swal({
                title: "Are you sure?",
                text: 'Hapus Data?',
                type: "warning",
                html: true,
                confirmButtonColor: '#d9534f',

                confirmButtonColor: "#DD6B55",
                showCancelButton: true,
            },function(){
                window.location.href = getLink
            });
            return false;
        });
    });
</script>
</body>
</html>