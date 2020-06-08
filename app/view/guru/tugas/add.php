<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Tugas</li>
                    <li class="breadcrumb-item active"><?php if (isset($data['detail'])) {
                        echo 'Edit Tugas';
                    } else{
                        echo 'Tambah Tugas';
                    }?></li>
                </ol>
            </div>

        </div>


        <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white"><?php if (isset($data['detail'])) {
                        echo 'Edit Tugas';
                    } else{
                        echo 'Tambah Tugas';
                    }?></h4>
          </div>
          <div class="card-body">
              <form action="<?php if(isset($data['detail'])) { echo BASEURL.'Tugas/update/'.$data['detail']['id']; } else { echo BASEURL.'Tugas/store';};?>" method="post" enctype="multipart/form-data">
                  <div class="form-body">
                      <h3 class="card-title">Ketentuan Tugas</h3>
                      <hr>
                      <div class="row p-t-20">
                          
                          <div class="col-md-6">                
                              <div class="form-group">
                                  <label class="control-label">Kelas</label>
                                  <select required name="id_kelas" id="id_kelas" onchange="kelasGet(this.options[this.selectedIndex].value)" class="form-control custom-select">
                                      <option value="">Pilih Kelas</option>
                                        <?php foreach ($data['kelas'] as $kl) {?>
                                            <option <?php if(isset($data['detail'])){ if ($data['detail']['id_kelas'] == $kl['id']) {echo 'selected' ;}else{ echo '';}}else{ echo '';} ?>  value="<?= $kl['id']?>"><?= $kl['tingkatan'].''.$kl['nama_kelas']?></option>
                                        <?php } ?>
                                  </select>

                              </div>
                          </div>
                          <div class="col-md-6">                
                              <div class="form-group">
                                  <label class="control-label">Mapel</label>
                                  <select required name="id_mapel" id="mapel" class="form-control custom-select">
                                      <option value="">Pilih Mapel</option>
                                    <?php foreach ($data['mapel'] as $kl) {?>
                                        <option <?php if(isset($data['detail'])){ if ($data['detail']['id_mapel'] == $kl['id']) {echo 'selected' ;}else{ echo '';}}else{ echo '';} ?>  value="<?= $kl['id']?>"><?= $kl['nama_mapel']?></option>
                                    <?php } ?>
                                  </select>

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Judul</label>
                                  <input type="text" required value="<?php if(isset($data['detail'])){ echo $data['detail']['judul'];}else{ echo '';} ?>" placeholder="Judul tugas" name="judul" class="form-control" id="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Tanggal Deadline</label>
                                  <input type="datetime-local" value="<?php if(isset($data['detail'])){ echo $data['detail']['deadline'];}else{ echo '';} ?>" name="deadline" class="form-control" id="">
                              </div>
                          </div>
                          <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Deskripsi</label>
                                    <textarea id="mymce" name="deskripsi" class="form-control"><?php if(isset($data['detail'])){ echo $data['detail']['deskripsi'];}else{ echo '';} ?></textarea>

                                   
                                </div>
                            </div>
                            <div class="col-md-12">                
                              <div class="form-group">
                                  <label class="control-label">Type File</label>
                                  <select required name="type" id="type" class="form-control custom-select">
                                        <option value="">Pilih Type File</option>
                                        <option <?php if(isset($data['detail'])){ if ($data['detail']['type_file'] == 'zip') {echo 'selected' ;}else{ echo '';}}else{ echo '';} ?> value="zip">zip</option>
                                        <option <?php if(isset($data['detail'])){ if ($data['detail']['type_file'] == 'docx') {echo 'selected' ;}else{ echo '';}}else{ echo '';} ?> value="docx">docx</option>
                                        <option <?php if(isset($data['detail'])){ if ($data['detail']['type_file'] == 'pdf') {echo 'selected' ;}else{ echo '';}}else{ echo '';} ?> value="pdf">pdf</option>
                                        <option <?php if(isset($data['detail'])){ if ($data['detail']['type_file'] == 'ppt') {echo 'selected' ;}else{ echo '';}}else{ echo '';} ?> value="ppt">ppt</option>
                                        <option <?php if(isset($data['detail'])){ if ($data['detail']['type_file'] == 'txt') {echo 'selected' ;}else{ echo '';}}else{ echo '';} ?> value="txt">txt</option>
                                        <option <?php if(isset($data['detail'])){ if ($data['detail']['type_file'] == 'rar') {echo 'selected' ;}else{ echo '';}}else{ echo '';} ?> value="rar">rar</option>
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

    <script>
        var dateControl = document.querySelector('input[type="datetime-local"]');
        dateControl.value = '2017-06-01T08:30';
    </script>