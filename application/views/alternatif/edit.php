<?php $this->load->view('layouts/header_admin'); ?>

        <!-- page content -->
        <div class="right_col">
            <div class="container">
      <br/><br/><br/>
      <legend>Edit Data Drone</legend>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <?php echo form_open('Alternatif/update/'.$alternatif->id_daron); ?>
        <?php echo form_hidden('id_daron', $alternatif->id_daron) ?>
       
        <div class="form-group">
                <label for="nama">Nama Alternatif</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $alternatif->nama ?>">
              </div>
              <div class="form-group">
          <label>  </label>
              <select class="form-control" name ="type" id="type"> 
                <option selected>
                <?php
                  foreach($type as $k) {
                    $s='';
                      if($k->id_sub_kriteria == $alternatif->type)
                      { $s='selected'; }
                ?>
                 <option value="<?php echo $k->id_sub_kriteria ?>" <?php echo $s ?>>
                    <?php echo $k->deskripsi ?>
                  </option>
                  <?php } ?>
            </select>
        </div>
              <div class="form-group">
          <label> Status </label>
              <select class="form-control" name ="status" id="status"> 
              <option selected> <?php echo $alternatif->status ?></option>
                  <option value="aktif">Aktif</option>
                  <option value="dikunci">Kunci</option>
            </select>
        </div>
       

        <a class="btn btn-info" href="<?php echo base_url('alternatif/index') ?>">Kembali</a>
        <button type="submit" class="btn btn-primary">OK</button>
      <?php echo form_close(); ?>
      </div>
</div>
        </div>        
        <!-- /page content -->

        <?php $this->load->view('layouts/footer_admin'); ?>