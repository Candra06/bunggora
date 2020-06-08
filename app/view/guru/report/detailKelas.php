<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Kelas</li>
                </ol>
            </div>

        </div>


        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= $data['judul'];?></h4>
                <a href="<?= BASEURL; ?>Tugas/add" class="btn btn-info"> <i class="fa fa-plus"></i> Tambah Data</a>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <?php Flasher::flash(); ?>
                    </div>
                </div>
                <div class="table-responsive m-t-20">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                        $no = 1;
                          foreach ($data['kelas'] as $dt) {
                              ?>

                            <tr>
                                <td><?= $no?></td>
                                <td><?= $dt['nama']?></td>
                                <td><?= $dt['tingkatan'] .''.$dt['nama_kelas']?></td>
                                <td><a class="btn btn-info" href="" data-toggle="modal" data-target="#responsive-modal<?= $no ?>" data-whatever="<?= $dt['nama']?>"> <i class="fa fa-plus"></i> Tambah Report</a> </td>
                            </tr>
                            <div id="responsive-modal<?= $no ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Tambah report siswa</h4>
                                        </div>
                                        <form action="<?= BASEURL?>Report/addReport/<?= $dt['id']?>" method="POST">
                                        <div class="modal-body">
                                            
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Nama Siswa</label>
                                                    <h4><?= $dt['nama'] ?></h4>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Report:</label>
                                                    <textarea name="report" class="form-control" id="message-text"></textarea>
                                                </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
                <!-- sample modal content -->
                
                <!-- /.modal -->
              

    <script>
        $('#responsive-modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>
