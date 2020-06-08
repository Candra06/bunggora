<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Mapel</li>
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
                <div class="row">
                    <?php foreach ($data['mapel'] as $dt) { ?>
                        <div class="col-md-4">
                            <a href="<?= BASEURL.'Mapel/detailMapel/'.$dt['id_jadwal'];?>">
                                    <div class="card card-inverse card-success text-center">
                                    <br>
                                            <h3 style="color: white; font-weight: bold;"><?= $dt['nama_mapel']?></h3>
                                            <p style="color: white; "><?= $dt['nama']?></p>
                                            <p style="color: white; "><?= $dt['hari'].'-'.$dt['jam']?></p>
                                    </div>
                            </a>
                       </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
