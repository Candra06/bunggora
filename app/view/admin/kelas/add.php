<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Siswa</li>
                    <li class="breadcrumb-item active"><?= $data['judul'] ?></li>
                </ol>
            </div>

        </div>


        <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white"><?= $data['judul'] ?></h4>
          </div>
          <div class="card-body">
              <form action="<?php if(isset($data['detail'])){ echo BASEURL.'Kelas/update/'.$data['detail'][0]['id'];} else{ echo BASEURL.'Kelas/store';} ?>" method="post">
                  <div class="form-body">
                      
                      <!--/row-->
                      <h3 class="box-title m-t-10">Info</h3>
                      <hr>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Rombel</label>
                                  <input type="text" name="rombel" value="<?php if (isset($data['detail'])) { if ($data['detail'][0]['nama_kelas'] == '')  echo ''; else echo $data['detail'][0]['nama_kelas']; }?>" required placeholder="Rombel" class="form-control">
                              </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                              <div class="form-group">
                                    <label class="control-label">Tingkatan</label>
                                     <select required name="tingkatan" class="form-control custom-select">
                                        <option value="">Pilih Tingkatan</option>
                                        <option <?php if(isset($data['detail'])){ if($data['detail'][0]['tingkatan'] == 7){ echo 'selected';} else{ echo '';}} ?> value="7">7</option>
                                        <option <?php if(isset($data['detail'])){ if($data['detail'][0]['tingkatan'] == 8){ echo 'selected';} else{ echo '';}} ?> value="8">8</option>
                                        <option <?php if(isset($data['detail'])){ if($data['detail'][0]['tingkatan'] == 9){ echo 'selected';} else{ echo '';}} ?> value="9">9</option>
                                    
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
