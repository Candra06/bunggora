<footer class="footer">
    &copy 2020 Bunggora RA Team
</footer>
</div>
</div>
<script src="<?= BASEURL;?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= BASEURL;?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?= BASEURL;?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="<?= BASEURL;?>assets/js/jquery.slimscroll.js"></script>
<script src="<?= BASEURL;?>assets/js/waves.js"></script>

<script src="<?= BASEURL;?>assets/js/sidebarmenu.js"></script>
<script src="<?= BASEURL;?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?= BASEURL;?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?= BASEURL;?>assets/js/custom.min.js"></script>
<script src="<?= BASEURL;?>assets/plugins/d3/d3.min.js"></script>
<script src="<?= BASEURL;?>assets/plugins/c3-master/c3.min.js"></script>
    
<script src="<?= BASEURL;?>assets/js/dashboard2.js"></script>
<script src="<?= BASEURL;?>assets/plugins/tinymce/tinymce.min.js"></script>
<script src="<?= BASEURL;?>assets/plugins/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 100,
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
<script src="<?= BASEURL;?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
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
