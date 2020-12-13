<?php $this->load->view('layouts/header_admin'); ?>

        <!-- page content -->
        <div class="right_col">
            <div class="container">
      <br/><br/><br/>
      <legend>Edit Kriteria</legend>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <?php echo form_open('Kriteria/update/'.$kriteria->id_kriteria); ?>
        <?php echo form_hidden('id_kriteria', $kriteria->id_kriteria) ?>
       
        <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="eketeranganmail" name="keterangan" value="<?php echo $kriteria->keterangan ?>">
              </div>
              <div class="form-group">
                <label for="kode_kriteria">Kode Kriteria</label>
                <input type="text" class="form-control" id="kode_kriteria" name="kode_kriteria" value="<?php echo $kriteria->kode_kriteria ?>">
              </div>
              <div class="form-group">
                <label for="bobot">Bobot</label>
                <input type="text" class="form-control" id="bobot" name="bobot" value="<?php echo $kriteria->bobot ?>">
              </div>
        <div class="form-group">
          <label> Jenis Kriteria </label>
              <select class="form-control" name ="jenis" id="jenis"> 
              <option selected> <?php echo $kriteria->jenis ?></option>
                  <option value="Cost">Cost</option>
                  <option value="Benifit">Benifit</option>
            </select>
        </div>

        <a class="btn btn-info" href="<?php echo base_url('Kriteria/index') ?>">Kembali</a>
        <button type="submit" class="btn btn-primary">OK</button>
      <?php echo form_close(); ?>
      </div>
</div>
        </div>        
        <!-- /page content -->

        <?php $this->load->view('layouts/footer_admin'); ?>