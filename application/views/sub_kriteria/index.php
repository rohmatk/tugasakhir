<?php $this->load->view('layouts/header_admin'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
               
                  <div class="x_title">
                    <h1>Sub Kriteria</h1>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
    <?php if ($kriteria==NULL): ?>
        <div class="box box-solid">
          <div class="box-body text-center" style="height: 200px; padding-top: 90px;">
            Kosong
          </div>
        </div>
      <?php endif ?>
      
      <?php foreach ($kriteria as $key): ?>
        
        <div class="x_panel">
          <div class="x_title">
            <h3 class="box-title"><?= $key->keterangan." (".$key->kode_kriteria.")" ?></h3>
            <div class="box-tools">
              <a href="#<?= $key->id_kriteria ?>" data-toggle="modal" class="btn btn-default btn-sm">Tambah</a>
              <!-- Modal -->
              <div class="modal fade" id="<?= $key->id_kriteria ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel"><?= $key->keterangan ?></h4>
                          </div>
                          <?= form_open('Sub_kriteria/store') ?>
                              <div class="modal-body">
                                <input type="text" name="id_kriteria" value="<?= $key->id_kriteria ?>" hidden>
                                  <div class="form-group">
                                      <label for="deskripsi">Deskripsi</label>
                                      <input type="text" id="deskripsi" placeholder="Masukkan Deskripsi" class="form-control" name="deskripsi" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="nilai">Nilai</label>
                                      <input type="text" placeholder="Masukkan Nilai" id="nilai" name="nilai" class="form-control" required>
                                  </div>
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
            </div>
          </div><!-- /.box-header -->
          <div class="x_content">
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>Deskripsi</th>
                  <th>Nilai</th>
                  <th colspan="2" class="text-center" width="10%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //$email = $this->model_app->email($this->session->userdata('user'));
                  $sub_kriteria1 = $this->Sub_Kriteria_model->data_sub_kriteria($key->id_kriteria);
                  
                  // $test=json_encode($sub_kriteria1);
                  // echo var_dump($test);
                ?>

                <?php if ($sub_kriteria1==NULL): ?>
                  <tr>
                    <td colspan="5" class="text-center">Kosong</td>
                  </tr>
                <?php endif ?>

                <?php foreach ($sub_kriteria1 as $key): ?>
                  <tr>
                    <td><?= $key['deskripsi'] ?></td>
                    <td><?= $key['nilai'] ?></td>
                    <td><a href="#editsk<?= $key['id_sub_kriteria'] ?>" data-toggle="modal" title="edit" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a></td>
                    <td><a href="<?= base_url('Sub_kriteria/destroy/'.$key['id_sub_kriteria']) ?>" title="hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus sub kriteria ini?');"><i class="fa fa-trash"></i> Hapus</a></td>
                  </tr>

                  <!-- Modal -->
                  <div class="modal fade" id="editsk<?= $key['id_sub_kriteria'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Edit <?= $key['deskripsi'] ?></h4>
                              </div>
                              <?= form_open('Sub_kriteria/update/'.$key['id_sub_kriteria']) ?>
                              <?= form_hidden('id_sub_kriteria', $key['id_sub_kriteria']) ?>
                                  <div class="modal-body">
                                  <input type="text" name="id_kriteria" value="<?= $key['id_kriteria'] ?>" hidden>
                                      <div class="form-group">
                                          <label for="deskripsi">Deskripsi</label>
                                          <input type="text" id="deskripsi" placeholder="Masukkan Deskripsi" class="form-control" value="<?= $key['deskripsi'] ?>" name="deskripsi" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="nilai">Nilai</label>
                                          <input type="text" placeholder="Masukkan Nilai" id="nilai" name="nilai" class="form-control" value="<?= $key['nilai'] ?>" required>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                      <button type="submit" class="btn btn-primary">Ubah</button>
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

      <?php endforeach ?>
                  </div>
       
              </div>

              
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php $this->load->view('layouts/footer_admin'); ?>