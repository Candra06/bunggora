<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Siswa</li>
                </ol>
            </div>

        </div>


        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Siswa</h4>
                <a href="<?= BASEURL; ?>Siswa/add" class="btn btn-info"> <i class="fa fa-plus"></i> Tambah Data</a>
                <div class="row">
                    <div class="col-md-12">
                        <?php Flasher::flash(); ?>
                    </div>
                </div>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Telepon</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data['siswa'] as $dt) {
                              ?>

                            <tr>
                                <td><?= $dt['nis']?></td>
                                <td><?= $dt['nama']?></td>
                                <td><?= $dt['tingkatan'] .''.$dt['nama_kelas']?></td>
                                <td><?= $dt['telepon']?></td>
                                <td><span class="label <?=  $dt['status'] == 'aktif' ? 'label-success' : 'label-danger' ?>"><?= $dt['status']?></span></td>
                                <td> <a class="btn btn-info" href="#"> <i class="fa fa-pencil"></i> Edit</a> </td>
                            </tr>
                            <?php } ?>

                            <!-- <tr>
                                <td>182410101012</td>
                                <td>Abdi Rahman</td>
                                <td>089843368286</td>
                                <td> <span class="label label-success">Aktif</span> </td>
                                <td> <a class="btn btn-info" href="#"> <i class="fa fa-pencil"></i> Edit</a> </td>
                            </tr>
                            <tr>
                                <td>182410101012</td>
                                <td>Abdi Rahman</td>
                                <td>089843368286</td>
                                <td> <span class="label label-danger">Banned</span> </td>
                                <td> <a class="btn btn-info" href="#"> <i class="fa fa-pencil"></i> Edit</a> </td>
                            </tr> -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
