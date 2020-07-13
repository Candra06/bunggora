<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Mapel</li>
                    <li class="breadcrumb-item active"><?= $data['judul'] ?></li>
                </ol>
            </div>

        </div>


        <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white"><?= $data['judul'] ?></h4>
          </div>
          <div class="card-body">
              <form action="<?php if(isset($data['detail'])){ echo BASEURL.'Mapel/update/'.$data['detail']['id'];}else{ echo BASEURL.'Mapel/store';} ?>" method="post">
                  <div class="form-body">
                      
                      <!--/row-->
                      <h3 class="box-title m-t-10">Data Mapel</h3>
                      <hr>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Nama Mata Pelajaran</label>
                                  <input type="text" name="mapel" value="<?php if(isset($data['detail'])){ echo $data['detail']['nama_mapel'];}else{ echo '';} ?>" required placeholder="Nama Mata Pelajaran" class="form-control">
                              </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                              <div class="form-group">
                                    <label class="control-label">Golongan</label>
                                     <select required name="golongan" class="form-control custom-select">
                                        <option value="">Pilih Golongan</option>
                                        <option <?php if(isset($data['detail'])){ if($data['detail']['golongan'] == 'muatan lokal'){ echo 'selected';} else {echo '';}}else{ echo '';} ?> value="muatan lokal">Muatan Lokal</option>
                                        <option <?php if(isset($data['detail'])){ if($data['detail']['golongan'] == 'wajib'){ echo 'selected';} else {echo '';}}else{ echo '';} ?> value="wajib">Wajib</option>
                                    
                                    </select>
                              </div>
                          </div>
                          <!--/span-->
                      </div>
                      <!--/row-->

                  </div>
                  <div class="form-actions">
                      <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                      <button type="reset" class="btn btn-inverse">Cancel</button>
                  </div>
              </form>
          </div>
        </div>
    </div>
