<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Jadwal</li>
                    <li class="breadcrumb-item active"><?= $data['judul']; ?></li>
                </ol>
            </div>

        </div>


        <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white"><?= $data['judul']; ?></h4>
          </div>
          <div class="card-body">
              <form action="<?php if(isset($data['detail'])){ echo BASEURL.'Jadwal/update/'.$data['detail']['id']; }else{ BASEURL.'Jadwal/store';} ?>" method="post">
                  <div class="form-body">
                      <h3 class="card-title">Info Jadwal</h3>
                      <hr>
                      <div class="row p-t-20">
                          <div class="col-md-6">
                              <div class="form-group">                            
                                  <label class="control-label">Kelas</label>
                                  <select required name="id_kelas" class="form-control custom-select">
                                      <option value="">Pilih Kelas</option>
                                    <?php foreach ($data['kelas'] as $kl) {?>
                                        <option <?php if(isset($data['detail'])){ if($data['detail']['id_kelas'] == $kl['id']){ echo 'selected';} else { echo '';}} ?> value="<?= $kl['id']?>"><?= $kl['tingkatan'].''.$kl['nama_kelas']?></option>
                                    <?php } ?>
                                  </select>

                              </div>
                          </div>
                          <div class="col-md-6">                
                              <div class="form-group">
                                  <label class="control-label">Mapel</label>
                                  <select required name="id_mapel" class="form-control custom-select">
                                      <option value="">Pilih Mapel</option>
                                    <?php foreach ($data['mapel'] as $kl) {?>
                                        <option <?php if(isset($data['detail'])){ if($data['detail']['id_mapel'] == $kl['id']){ echo 'selected';} else { echo '';}} ?>  value="<?= $kl['id']?>"><?= $kl['nama_mapel']?> (<?= $kl['nama']?>)</option>
                                    <?php } ?>
                                  </select>

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Hari</label>
                                  <select required name="hari" class="form-control custom-select">
                                      <option value="">Pilih Kelas</option>
                                    <option <?php if(isset($data['detail'])){ if($data['detail']['hari'] == 'Senin'){ echo 'selected';} else { echo '';}} ?>  value="Senin">Senin</option>
                                    <option <?php if(isset($data['detail'])){ if($data['detail']['hari'] == 'Selasa'){ echo 'selected';} else { echo '';}} ?>  value="Selasa">Selasa</option>
                                    <option <?php if(isset($data['detail'])){ if($data['detail']['hari'] == 'Rabu'){ echo 'selected';} else { echo '';}} ?>  value="Rabu">Rabu</option>
                                    <option <?php if(isset($data['detail'])){ if($data['detail']['hari'] == 'Kamis'){ echo 'selected';} else { echo '';}} ?>  value="Kamis">Kamis</option>
                                    <option <?php if(isset($data['detail'])){ if($data['detail']['hari'] == 'Jum`at'){ echo 'selected';} else { echo '';}} ?>  value="Jum`at">Jum`at</option>
                                    <option <?php if(isset($data['detail'])){ if($data['detail']['hari'] == 'Sabtu'){ echo 'selected';} else { echo '';}} ?>  value="Sabtu">Sabtu</option>
                                    
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Jam</label>
                                  <input type="time" value="<?php if(isset($data['detail'])){ echo $data['detail']['jam'];}else{ echo '';   } ?>" name="jam" required placeholder="Masukkan Jam " class="form-control">
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
