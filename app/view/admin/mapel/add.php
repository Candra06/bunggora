<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Mapel</li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>

        </div>


        <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white">Tambah Data</h4>
          </div>
          <div class="card-body">
              <form action="<?= BASEURL;?>Mapel/store" method="post">
                  <div class="form-body">
                      
                      <!--/row-->
                      <h3 class="box-title m-t-10">Data Mapel</h3>
                      <hr>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Nama Mata Pelajaran</label>
                                  <input type="text" name="mapel" required placeholder="Nama Mata Pelajaran" class="form-control">
                              </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                              <div class="form-group">
                                    <label class="control-label">Golongan</label>
                                     <select required name="golongan" class="form-control custom-select">
                                        <option value="">Pilih Golongan</option>
                                        <option value="muatan lokal">Muatan Lokal</option>
                                        <option value="wajib">Wajib</option>
                                    
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
