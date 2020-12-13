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
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kriteria</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="15%">Kode Kriteria</th>
                          <th width="20%">Keterangan</th>
                          <th width="10%">Bobot</th>
                          <th width="10%">Jenis</th>
                          <th width="15%">
                          
                          </th>
                          
                        </tr>
                      </thead>

                      <tbody>
                      <?php foreach ($list as $data => $value) { ?>
                        <tr>
                        <td><?php echo $value->kode_kriteria ?></td>
                        <td><?php echo $value->keterangan ?></td>
                        <td><?php echo $value->bobot."%" ?></td>
                        <td><?php echo $value->jenis ?></td>
                        
                       
                       

                          <td>
                              <?php echo form_open('Kriteria/destroy/'.$value->id_kriteria)  ?>
                              <a class="btn btn-info" href="<?php echo base_url('Kriteria/edit/'.$value->id_kriteria) ?>">
                              <i class="fa fa-pencil"></i>
                              </a>
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-close"></i></button>
                              <?php echo form_close() ?>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php $this->load->view('layouts/footer_admin'); ?>