<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Siswa</li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>

        </div>


        <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white">Tambah Data</h4>
          </div>
          <div class="card-body">
              <form action="<?= BASEURL;?>Siswa/store" method="post">
                  <div class="form-body">
                      <h3 class="card-title">Info Pribadi</h3>
                      <hr>
                      <div class="row p-t-20">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">NIS</label>
                                  <input required type="text" name="nis" class="form-control" placeholder="Masukkan NIS">

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Nama</label>
                                  <input required type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap">

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Kelas</label>
                                  <select required name="id_kelas" class="form-control custom-select">
                                      <option value="">Pilih Kelas</option>
                                    <?php foreach ($data['kelas'] as $kl) {?>
                                        <option value="<?= $kl['id']?>"><?= $kl['tingkatan'].''.$kl['nama_kelas']?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Telepon</label>
                                  <input required type="text" name="telepon" class="form-control" placeholder="Masukkan nomor hp/telepon">

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Status</label>
                                  <select required name="status" class="form-control custom-select">
                                      <option value="">Pilih Status</option>
                                      <option value="aktif">Aktif</option>
                                      <option value="banned">Banned</option>
                                  </select>
                              </div>
                          </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Alamat</label>
                                    <textarea name="alamat" required class="form-control" rows="4" cols="80"></textarea>
                                </div>
                            </div>

                      </div>


                      <!--/row-->
                      <h3 class="box-title m-t-40">Akun</h3>
                      <hr>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" name="email" required placeholder="Masukkan email" class="form-control">
                              </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Password</label>
                                  <input type="password" name="password" required placeholder="Masukkan Password" class="form-control">
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
