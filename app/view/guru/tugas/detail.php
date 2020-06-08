<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Tugas</li>
                    <li class="breadcrumb-item active">Detail Data</li>
                </ol>
            </div>

        </div>


        <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white">Detail Data</h4>
          </div>
          <div class="card-body">
                <div class="form-body">
                    <h3 class="card-title"><?= $data['detail']['judul'] ?></h3>
                    <hr>
                    <div class="row p-t-20">
                        
                        <div class="col-md-6">                
                            <div class="form-group">
                                <label class="control-label">Kelas</label>
                                <h4><?= $data['detail']['tingkatan'].''.$data['detail']['nama_kelas'] ?></h4>

                            </div>
                        </div>
                        <div class="col-md-6">                
                            <div class="form-group">
                                <label class="control-label">Mapel</label>
                                <h4><?= $data['detail']['nama_mapel'] ?></h4>
                            </div>
                        </div>
                        <div class="col-md-6">                
                            <div class="form-group">
                                <label class="control-label">Type File</label>
                                <h4><?= $data['detail']['type_file'] ?></h4>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Tanggal Deadline</label>
                                <h4><?= $data['detail']['deadline'] ?></h4>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Deskripsi</label>
                                <?= $data['detail']['deskripsi'] ?>

                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <a href="<?= BASEURL?>Tugas/edit/<?= $data['detail']['id']?>" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
          </div>
        </div>
        <div class="card card-outline-info">
          <div class="card-body">
            <div class="table-responsive m-t-20">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>File</th>
                            <th>Tanggal Submit</th>
                            <th>Nilai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                    $no = 1;
                        foreach ($data['listDetail'] as $dt) {
                            ?>

                        <tr>
                            <td><?= $no?></td>
                            <td><?= $dt['nama'] ?></td>
                            <td><a href="<?= BASEURL.'file/tugas/'. $dt['file_jawaban']?>" class="btn btn-warning"><i class="fa fa-download"></i></a></td>
                            <td><?= $dt['tanggal_submit']?></td>
                            <td><?= $dt['nilai']?></td>
                            <td><a class="btn btn-info" href="<?= BASEURL.'Tugas/detail/'. $dt['id'] ?>">  Detail</a> </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
</div>
   