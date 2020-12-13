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
                    <h2>Data Drone</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="20%">Nama Alternatif</th>
                          <th width="10%"> </th>
                          <th width="10%">Status</th>
                          <?php if($this->session->userdata('id_user_level') == '1'): ?>
                          <th width="15%"></th>
                          <?php endif; ?>
                          
                        </tr>
                      </thead>

                      <tbody>
                      <?php foreach ($list as $data => $value) { ?>
                        <tr>
                        <td><?php echo $value->nama ?></td>
                        <td>
                        <?php foreach ($type as $k)
                          {
                            if($k->id_sub_kriteria == $value->type){
                            ?>
                            <?php echo $k->deskripsi;
                            }
                          }
                          ?>
                        </td>
                        <td><?php echo $value->status ?></td>
                        
                       
                       
                        <?php if($this->session->userdata('id_user_level') == '1'): ?>
                          <td>
                              <?php echo form_open('Alternatif/destroy/'.$value->id_daron)  ?>
                              <a class="btn btn-info" href="<?php echo base_url('Alternatif/edit/'.$value->id_daron) ?>">
                              <i class="fa fa-pencil"></i>
                              </a>
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-close"></i></button>
                              <?php echo form_close() ?>
                          </td>
                      <?php endif; ?>
                      
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