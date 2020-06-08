<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Jadwal</li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>

        </div>


        <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white">Tambah Data</h4>
          </div>
          <div class="card-body">
              <form action="<?= BASEURL;?>DataMengajar/store" method="post">
                  <div class="form-body">
                      <h3 class="card-title">Info Data Mengajar</h3>
                      <hr>
                      <div class="row p-t-20">
                          
                          <div class="col-md-6">                
                              <div class="form-group">
                                  <label class="control-label">Mapel</label>
                                  <select required name="id_mapel" class="form-control custom-select">
                                      <option value="">Pilih Mapel</option>
                                    <?php foreach ($data['mapel'] as $kl) {?>
                                        <option value="<?= $kl['id']?>"><?= $kl['nama_mapel']?></option>
                                    <?php } ?>
                                  </select>

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Guru</label>
                                  <select required name="id_guru" class="form-control custom-select">
                                      <option value="">Pilih Guru</option>
                                    <?php foreach ($data['guru'] as $kl) {?>
                                        <option value="<?= $kl['id']?>"><?= $kl['nama']?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                          </div>
                          
                      </div>

                  </div>
                  <div class="form-actions">
                      <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                      <button type="reset" class="btn btn-inverse">Cancel</button>
                  </div>
              </form>
          </div>
        </div>
    </div>
