<footer class="footer">
    &copy 2020 Bunggora RA Team
</footer>
</div>
</div>
<script src="<?= BASEURL;?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= BASEURL;?>plugins/bootstrap/js/popper.min.js"></script>
<script src="<?= BASEURL;?>plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= BASEURL;?>js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?= BASEURL;?>js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= BASEURL;?>js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= BASEURL;?>js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--c3 JavaScript -->
<script src="<?= BASEURL;?>js/dashboard2.js"></script>
<!-- This is data table -->
<script src="<?= BASEURL;?>plugins/datatables/jquery.dataTables.min.js"></script>
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
</script>
</body>

</html>
