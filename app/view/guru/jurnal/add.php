<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $data['judul'];?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Jurnal</li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>

        </div>


        <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white">Tambah Data</h4>
          </div>
          <div class="card-body">
              <form action="<?= BASEURL;?>Jurnal/store" method="post" enctype="multipart/form-data">
                  <div class="form-body">
                      <h3 class="card-title">Info Data Mengajar</h3>
                      <hr>
                      <div class="row p-t-20">
                          
                          <div class="col-md-6">                
                              <div class="form-group">
                                  <label class="control-label">Kelas</label>
                                  <select required name="id_kelas" id="id_kelas" onchange="kelasGet(this.options[this.selectedIndex].value)" class="form-control custom-select">
                                      <option value="">Pilih Kelas</option>
                                    <?php foreach ($data['kelas'] as $kl) {?>
                                        <option value="<?= $kl['id']?>"><?= $kl['tingkatan'].''.$kl['nama_kelas']?></option>
                                    <?php } ?>
                                  </select>

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Jadwal</label>
                                  <select required name="id_hari" id="id_hari" class="form-control custom-select">
                                      <option value="">Pilih Hari</option>
                                    
                                  </select>
                              </div>
                          </div>
                          <div class=" col-md-6">
                              <div class="form-group">
                              <label  class="control-label">File Materi</label>
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <input type="file" style="height: 150px !important;" id="input-file-now" name="materi" class="dropify" />
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class=" col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Set Absensi</label>
                                    
                                    <select required name="absensi" class="form-control custom-select">
                                      <option value="">Pilih Pengaturan Absensi</option>
                                      <option value="otomatis">Absen Otomatis</option>
                                      <option value="manual">Absen Manual</option>
                                  
                                  </select>
                           
                                </div>
                            </div>

                            <div class=" col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Keterangan</label>
                                    
                                    <textarea id="" name="keterangan" cols="20" rows="5" class="form-control"></textarea>
                           
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
        function kelasGet(item){
            var URL= '<?= BASEURL ?>'+"Jurnal/getHari";
            $.ajax({
                type: 'POST',
                url: URL,
                data: {
                    id_kelas:item
                },
                dataType: 'JSON',
                success: function(response) {
                    var html = '';
                    var i;
                    document.getElementById("id_hari").innerHTML=response;
                    for(i=0; i<response.length; i++){
                        html += '<option value='+response[i].id+'>'+response[i].hari+' ('+response[i].jam+')</option>';
                    }
                    $('#id_hari').html(html);
                },error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus); 
                    alert("Error: " + errorThrown);
                }
            });
        }
    </script>