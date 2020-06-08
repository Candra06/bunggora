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
                
                <div class="row">
                    <div class="col-md-12">
                        <?php Flasher::flash(); ?>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($data['kelas'] as $dt) { ?>
                        <div class="col-md-4">
                       <a href="<?= BASEURL.'Report/detailKelas/'.$dt['id'];?>">
                               <div class="card  card-inverse card-info text-center">

                               <br>
                                    <h1 style="color: white; font-weight: bold;"><?= $dt['tingkatan'].''.$dt['nama_kelas']?></h1>
                                    <br>
                               </div>
                       </a>
                       </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
