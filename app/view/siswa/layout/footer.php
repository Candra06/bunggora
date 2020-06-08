<footer class="footer">
    &copy 2020 Bunggora RA Team
</footer>
</div>
</div>
<script src="<?= BASEURL;?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= BASEURL;?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?= BASEURL;?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= BASEURL;?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?= BASEURL;?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= BASEURL;?>assets/js/sidebarmenu.js"></script>
 <!--stickey kit -->
 <script src="<?= BASEURL;?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?= BASEURL;?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--stickey kit -->
    <script src="<?= BASEURL;?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?= BASEURL;?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= BASEURL;?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    
<!--Custom JavaScript -->
<script src="<?= BASEURL;?>assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--c3 JavaScript -->
<!--c3 JavaScript -->
<script src="<?= BASEURL;?>assets/plugins/d3/d3.min.js"></script>
    <script src="<?= BASEURL;?>assets/plugins/c3-master/c3.min.js"></script>
    
<script src="<?= BASEURL;?>assets/js/dashboard2.js"></script>
<!-- This is data table -->
<script src="<?= BASEURL;?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- wysuhtml5 Plugin JavaScript -->
<script src="<?= BASEURL;?>assets/plugins/tinymce/tinymce.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });

    });
});
$(document).ready(function() {

if ($("#mymce").length > 0) {
    tinymce.init({
        selector: "textarea#mymce",
        theme: "modern",
        height: 300,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

    });
}
});
</script>
</body>

</html>
