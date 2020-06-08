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
                <h4 class="card-title"><?= $data['judul']?></h4>
                <div class="row">
                <?php foreach ($data['mapel'] as $mp) {?>
                    
                        <div class="col-md-4">
                            <div class="card card-inverse card-primary p-4 text-center">
                                <h4 class="card-title"><?= $mp['nama_mapel']?></h4>
                            </div>
                        </div>
                        
                    
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
