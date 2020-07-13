<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Jadwal</li>
                </ol>
            </div>

        </div>


        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= $data['judul'];?></h4>
                <a href="<?= BASEURL; ?>DataMengajar/add" class="btn btn-info"> <i class="fa fa-plus"></i> Tambah Data</a>
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
                                <th>Mata Pelajaran</th>
                                <th>Guru</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $i = 1;
                          foreach ($data['dataMengajar'] as $dt) {
                              ?>

                            <tr>
                                <td><?= $i?></td>
                                <td><?= $dt['nama_mapel']?></td>
                                <td><?= $dt['nama'] ?></td>
                                <td> <a class="btn btn-info" href="DataMengajar/edit/<?= $dt['id'] ?>"> <i class="fa fa-pencil"></i> Edit</a> </td>
                            </tr>
                            <?php $i++;} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
