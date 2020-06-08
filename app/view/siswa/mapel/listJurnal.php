<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Mapel</li>
                    <li class="breadcrumb-item active">List Materi</li>
                </ol>
            </div>

        </div>


        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= $data['judul'];?></h4>
                
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
                                <th>Judul</th>
                                <th>Absensi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                        $no = 1;
                          foreach ($data['jurnal'] as $dt) {
                              ?>

                            <tr>
                                <td><?= $no?></td>
                                <td><a href="<?= BASEURL ?>file/materi/<?=$dt['materi']?>" download><?=$dt['materi']?></a></td>
                                <td> <?php if($dt['absensi'] == 'manual' ){ ?> <a href="<?= BASEURL ?>Jurnal/addAbsensi/<?= $_SESSION['id']?>/<?= $dt['id']?>" class="btn btn-success">Absen</a> <?php } else{ ?> <p>Hadir</p> <?php } ?></td>
                                <td><a class="btn btn-info" href="" data-toggle="modal" data-target="#responsive-modal<?= $no ?>" data-whatever="<?= $dt['keterangan']?>"> Detail</a> </td>
                            </tr>
                            <div id="responsive-modal<?= $no ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Detail Materi</h4>
                                        </div>
                                        
                                        <div class="modal-body">
                                            
                                                
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Keterangan</label>
                                                    <p><?= $dt['keterangan']?></p>
                                                </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            
                                        </div>
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
