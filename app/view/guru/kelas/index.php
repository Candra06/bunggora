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
                <h4 class="card-title">Data Kelas</h4>
                
                <div class="table-responsive m-t-20">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kelas</th>
                                <th>Jumlah Siswa</th>
                                <th>Jumlah Materi</th>
                                <th>Jumlah Tugas</th>
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
                                <td><?= $dt['tingkatan'] .''.$dt['nama_kelas']?></td>
                                <td><?= $dt['jumlah_siswa']?></td>
                                <td>4</td>
                                <td>4</td>
                                <td><a class="btn btn-info" href="<?= $dt['id'] ?>">  Detail</a> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
