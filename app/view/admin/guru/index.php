<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Guru</li>
                </ol>
            </div>

        </div>


        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= $data['judul']?></h4>
                <a href="<?= BASEURL; ?>Guru/add" class="btn btn-info"> <i class="fa fa-plus"></i> Tambah Data</a>

                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-12">
                        <?php Flasher::flash(); ?>
                    </div>
                </div>
                <div class="table-responsive m-t-10">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data['guru'] as $dt) {
                              ?>

                            <tr>
                                <td><?= $dt['nip']?></td>
                                <td><?= $dt['nama']?></td>
                                <td><?= $dt['telepon']?></td>
                                <td><span class="label <?=  $dt['status'] == 'aktif' ? 'label-success' : 'label-danger' ?>"><?= $dt['status']?></span></td>
                                <td> <a class="btn btn-info" href="<?= BASEURL ?>Guru/edit/<?= $dt['id']?>"> <i class="fa fa-pencil"></i> Edit</a> </td>
                            </tr>
                            <?php } ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
