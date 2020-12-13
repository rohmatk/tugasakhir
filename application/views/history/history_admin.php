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
                    <h2>Riwayat Administrator</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="20%">Waktu</th>
                          <th width="20%">User</th>
                          <th width="15%">Activity</th>
                          <th width="5%"></th>
                       
                         
                          
                          
                        </tr>
                      </thead>

                      <tbody>
                      <?php foreach ($riwayat as $value) { ?>
                        <tr>
                      
                        <td><?php echo $value->log_time ?></td>
                        <td>
                          <?php foreach ($user as $k)
                          {
                            if($k->id_user == $value->log_user)
                            {?>
                            
                            <?php echo $k->username;
                            }
                        }
                          ?>
                        
                        <td><?php echo $value->log_desc ?></td>
                        <?php } ?>
                        </tr>
                      
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