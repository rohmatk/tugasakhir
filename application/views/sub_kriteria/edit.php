<?php $this->load->view('layouts/header_admin'); ?>

        <!-- page content -->
        <div class="right_col">
            <div class="container">
      <br/><br/><br/>
      <legend>Edit Sub Kriteria</legend>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <?php echo form_open('Sub_kriteria/update/'.$sub_kriteria->id_sub_kriteria); ?>
        <?php echo form_hidden('id_sub_kriteria', $sub_kriteria->id_sub_kriteria) ?>
        <div class="form-group">
          <label> Kode Kriteria </label>
              <select class="form-control" name ="id_kriteria" id="id_kriteria"> 
                <option selected>
                <?php
                  foreach($kriteria as $k) {
                    $s='';
                      if($k->id_kriteria == $sub_kriteria->id_kriteria)
                      { $s='selected'; }
                ?>
                 <option value="<?php echo $k->id_kriteria ?>" <?php echo $s ?>>
                    <?php echo $k->kode_kriteria ?>
                  </option>
                  <?php } ?>
            </select>
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" value="<?php echo $sub_kriteria->deskripsi ?>">
        </div>
        <div class="form-group">
          <label for="nilai">Nilai</label>
          <input type="text" class="form-control" id="nilai" name="nilai" placeholder="Masukkan Nilai" value="<?php echo $sub_kriteria->nilai ?>">
        </div>
        
       

        <a class="btn btn-info" href="<?php echo base_url('Sub_kriteria/index') ?>">Kembali</a>
        <button type="submit" class="btn btn-primary">OK</button>
      <?php echo form_close(); ?>
      </div>
</div>
        </div>        
        <!-- /page content -->

        <?php $this->load->view('layouts/footer_admin'); ?>