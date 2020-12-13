<?php $this->load->view('layouts/header_admin'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <h2>Perhitungan Keputusan dengan Metode WASPAS</h2>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
      <div class="box-header with-border">
        <h3 class="box-title">Tabel Pencocokan Kriteria</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>Alternatif</th>
              <?php foreach ($kriteria as $key): ?>
                <th><?= $key->kode_kriteria ?></th>
              <?php endforeach ?>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($alternatif==NULL): ?>
              <tr>
                <td class="text-center" colspan="<?= 2+count($kriteria)  ?>">Silahkan lengkapi data di halaman <a href="<?= base_url('Alternatif/create') ?>" class="text-black"><u>Data.</u></a></td>
              </tr>
            <?php endif ?>

            <?php foreach ($alternatif as $keys): ?>
              <tr>
                <td><?= $keys->nama ?></td>
                <?php foreach ($kriteria as $key): ?>
                  <td>
                    <?php 
                    $id_user=$this->session->userdata('id_user');
                      $data_pencocokan = $this->Perhitungan_model->data_nilai($id_user,$keys->id_daron,$key->id_kriteria);
                      $penilaian_type=$this->Perhitungan_model->penilaian_type($keys->id_daron);
                      if($key->id_kriteria==1){
                        echo $penilaian_type['nilai'];
                      }else{
                      echo $data_pencocokan['nilai'];
                      }
                    ?>
                  </td>
                <?php endforeach ?>

                <?php $cek_tombol = $this->Perhitungan_model->untuk_tombol($id_user,$keys->id_daron); ?>

                <td width="7%">
                  <?php if ($cek_tombol==0) { ?>
                    <a href="#set<?= $keys->id_daron ?>" data-toggle="modal" class="btn btn-primary btn-sm" title="edit"><i class="fa fa-pencil"></i> Set</a>
                  <?php } else { ?>
                    <a href="#edit<?= $keys->id_daron ?>" data-toggle="modal" class="btn btn-primary btn-sm" title="edit"><i class="fa fa-pencil"></i> Edit</a>
                  <?php } ?>
                </td>
              </tr>
              
              <!-- set -->
              <!-- Modal -->
              <div class="modal fade" id="set<?= $keys->id_daron ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">Penilaian</h4>
                          </div>
                          <?= form_open('Perhitungan/tambah_penilaian') ?>
                              <div class="modal-body">
                                  <?php foreach ($kriteria as $key): ?>
                                    <?php 
                                      $sub_kriteria = $this->Perhitungan_model->data_sub_kriteria($key->id_kriteria);
                                    ?>
                                    <?php if ($sub_kriteria!=NULL): ?>
                                    <?php if ($key->id_kriteria == 1){
                                      $penilaian_type=$this->Perhitungan_model->penilaian_type($keys->id_daron);?>
                                      <input type="text" name="id_daron" value="<?= $penilaian_type['id_daron'] ?>" hidden>
                                      <input type="text" name="id_kriteria[]" value="<?= $penilaian_type['id_kriteria'] ?>" hidden>
                                      <div class="form-group">
                                        <label for="<?= $key->id_kriteria ?>"><?= $key->keterangan ?></label>
                                        <select name="nilai[]" class="form-control" id="<?= $penilaian_type['id_kriteria'] ?>">
                                            <option value="<?= $penilaian_type['id_sub_kriteria'] ?>"><?= $penilaian_type['deskripsi'] ?> </option>
                                        </select>
                                      </div>
                                   <?php }else{?>
                                      <input type="text" name="id_daron" value="<?= $keys->id_daron ?>" hidden>
                                      <input type="text" name="id_kriteria[]" value="<?= $key->id_kriteria ?>" hidden>
                                      <div class="form-group">
                                        <label for="<?= $key->id_kriteria ?>"><?= $key->keterangan ?></label>
                                        <select name="nilai[]" class="form-control" id="<?= $key->id_kriteria ?>" required>
                                          <option value="">--Pilih--</option>
                                          <?php foreach ($sub_kriteria as $subs_kriteria): ?>
                                            <option value="<?= $subs_kriteria['id_sub_kriteria'] ?>"><?= $subs_kriteria['deskripsi'] ?> </option>
                                          <?php endforeach ?>
                                        </select>
                                      </div>
                                    <?php }?>
                                    <?php endif ?>
                                  <?php endforeach ?>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn btn-primary">Tambah</button>
                              </div>
                          </form>
                      </div>
                      <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

              <!-- edit -->
              <!-- Modal -->
              <div class="modal fade" id="edit<?= $keys->id_daron ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">Pencocokan</h4>
                          </div>
                          <?= form_open('Perhitungan/update_penilaian') ?>
                              <div class="modal-body">
                                  <?php foreach ($kriteria as $key): ?>
                                    <?php 
                                     $sub_kriteria = $this->Perhitungan_model->data_sub_kriteria($key->id_kriteria);
                                    ?>
                                    <?php if ($sub_kriteria!=NULL): ?>
                                    <input type="text" name="id_daron" value="<?= $keys->id_daron ?>" hidden>
                                      <input type="text" name="id_kriteria[]" value="<?= $key->id_kriteria ?>" hidden>
                                      <div class="form-group">
                                      <label for="<?= $key->id_kriteria ?>"><?= $key->keterangan ?></label>
                                      <?php if ($key->id_kriteria == 1){
                                      $penilaian_type=$this->Perhitungan_model->penilaian_type($keys->id_daron);?>
                                      <select name="nilai[]" class="form-control" id="<?= $penilaian_type['id_kriteria'] ?>">
                                            <option value="<?= $penilaian_type['id_sub_kriteria'] ?>"><?= $penilaian_type['deskripsi'] ?> </option>
                                        </select>
                                      <?php } else {?>
                                        <select name="nilai[]" class="form-control" id="<?= $key->id_kriteria ?>" required>
                                          <option value="">--Pilih--</option>
                                          <?php foreach ($sub_kriteria as $subs_kriteria): ?>
                                            <?php 
                                              $s_option = $this->Perhitungan_model->data_penilaian($id_user,$keys->id_daron,$subs_kriteria['id_kriteria']);
                                            ?>
                                            <option value="<?= $subs_kriteria['id_sub_kriteria'] ?>" <?php if($subs_kriteria['id_sub_kriteria']==$s_option['nilai']){echo "selected";} ?>><?= $subs_kriteria['deskripsi'] ?> </option>
                                          <?php endforeach ?>
                                        </select>
                                      <?php } ?>
                                      </div>
                                    <?php endif ?>
                                  <?php endforeach ?>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                          </form>
                      </div>
                      <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
            <?php endforeach ?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
 </div>
 </div>

<?php if ($cek_penilaian ==NULL ) { ?>
  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="box-body text-center" style="height: 200px; padding-top: 90px;">
          isi tabel di atas
        </div>
      </div>
    </div>
  </div>
<?php } else { ?>

<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="box-header with-border">
        <h3 class="box-title">Normalisai</h3>
      </div><!-- /.box-header -->
      <div class="x_panel">
        <table class="table table-hover table-bordered">
          <thead>
          <tr>
              <th>Alternatif</th>
              <?php foreach ($kriteria as $key): ?>
                <th><?= $key->kode_kriteria ?></th>
              <?php endforeach ?>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($alternatif as $keys): ?>
          <tr>
                <td><?= $keys->nama ?></td>
                <?php foreach ($kriteria as $key): ?>
                  <td>
                    <?php 
                    $id_user=$this->session->userdata('id_user');
                      $data_pencocokan = $this->Perhitungan_model->data_nilai($id_user,$keys->id_daron,$key->id_kriteria);
                      $min_max=$this->Perhitungan_model->get_max_min($id_user,$key->id_kriteria);
                      if($min_max['jenis']=='Benifit'){
                      echo $data_pencocokan['nilai']/$min_max['max'];
                      }else{
                        echo $min_max['min']/$data_pencocokan['nilai'];
                      }
                    ?>
                  </td>
                <?php endforeach ?>

               
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->

    <div class="x_panel">
      <div class="box-header with-border">
        <h3 class="box-title">Bobot Kriteria</h3>
      </div><!-- /.box-header -->
      <div class="x_panel">
        <table class="table table-hover table-bordered">
          <thead>
          <tr>
              <?php foreach ($kriteria as $key): ?>
                <th><?= $key->kode_kriteria ?></th>
              <?php endforeach ?>
            </tr>
          </thead>
          <tbody>
          <?php //foreach ($alternatif as $keys): ?>
          <tr>
                <?php foreach ($kriteria as $key): ?>
                  <td>
                    <?php 
                    echo $key->bobot/100;
                    ?>
                  </td>
                <?php endforeach ?>

               
              </tr>
            <?php //endforeach ?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
    
    <div class="x_panel">
      <div class="box-header with-border">
        <h3 class="box-title">Nilai Qi</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>Alternatif</th>
              <th>Nilai Qi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($alternatif as $keys): ?>
              <tr>
                <td><?= $keys->nama; ?></td>
                <td>
                  <?php 
                    $ta = 0;
                    $pa = 1;
                    foreach ($kriteria as $key) {
                      $id_user=$this->session->userdata('id_user');
                      $data_pencocokan = $this->Perhitungan_model->data_nilai($id_user,$keys->id_daron,$key->id_kriteria);
                      $min_max=$this->Perhitungan_model->get_max_min($id_user,$key->id_kriteria);

                          if($min_max['jenis']=='Benifit'){
                            $p = $data_pencocokan['nilai']/$min_max['max'];
                          }else{
                            $p = $min_max['min']/$data_pencocokan['nilai'];
                          }
                      $bobot=$key->bobot/100;
                      $ta += $p*$bobot;
                      $pa *= pow($p,$bobot);
                      $qi=(0.5*$ta)+(0.5*$pa);
                      
                    }
                    echo $qi;
                    $hasil_max[]=$qi;
                    $id[] = $keys->id_daron;
                  ?>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->

<div class="x_panel">
      <div class="box-header with-border">
        <h3 class="box-title">Hasil Keputusan :</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <?php 
         $i = array_search(max($hasil_max), $hasil_max);
         $max = $id[$i];
          $hasil = max($hasil_max);
          $daron_terpilih = $this->Perhitungan_model->hasil($max);
        ?>
        <h4>Hasil perhitungan menggunakan metode WASPAS. Alternatif terbaik adalah   <b><?= $daron_terpilih['nama']?></b>dengan jumlah  <b><?= "Qi=".$hasil ?>.</b></h4>
        
        <?php $cek_simpan = $this->Perhitungan_model->untuk_tombol($id_user,$keys->id_daron); ?>
        <?php if ($cek_simpan==0) { ?>
          <?php echo form_open('Perhitungan/simpan_hasil/'.$id_user.'/'.$daron_terpilih['id_daron']); ?>
        <button type="submit" class="btn btn-primary"> Simpan Hasil Keputusan </button>
        <?php echo form_close(); ?>
       <?php } else { ?>
        <?php echo form_open('Perhitungan/update_hasil/'.$id_user.'/'.$daron_terpilih['id_daron']); ?>
        <button type="submit" class="btn btn-primary"> Update Hasil </button>
        <?php echo form_close(); ?>
        <?php } ?>
        <?php echo form_open('Laporan/cetak_laporan'); ?>
        <button type="submit" class="btn btn-primary"> Cetak Perhitungan </button>
        <?php echo form_close(); ?>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  

    <?php } ?>
    </div>
    </div>
        <!-- /page content -->
</div>
</div>

        <?php $this->load->view('layouts/footer_admin'); ?>