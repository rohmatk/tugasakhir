<?php $this->load->view('layouts/header_admin'); ?>

        <!-- page content -->
        <div class="right_col">
          <div class="container">
            <br/><br/><br/>
            <legend>Tambah Kriteria</legend>
            <?php $error=$this->session->flashdata('message');
                  if($error) {?>
                  <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
                  </div>
                  <?php }?> 
            <div class="col-xs-12 col-sm-12 col-md-12">
            <?php echo form_open('Kriteria/store'); ?>
              
             
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="eketeranganmail" name="keterangan" placeholder="Masukkan Keterangan Kriteria">
              </div>
              <div class="form-group">
                <label for="kode_kriteria">Kode Kriteria</label>
                <input type="text" class="form-control" id="kode_kriteria" name="kode_kriteria" placeholder="Masukkan Kode Kriteria">
              </div>
              <div class="form-group">
                <label for="bobot">Bobot</label>
                <input type="text" class="form-control" id="bobot" name="bobot" placeholder="Masukkan Bobot Kiteria ">
              </div>
              <div class="form-group">
            <label> Jenis </label>
                  <select class="form-control" name ="jenis" id="jenis"> 
                  <option selected> --Pilih Jenis Kriteria-- </option>
                  <option value="Cost">Cost</option>
                  <option value="Benifit">Benifit</option>
                </select>
            </div>

              <a class="btn btn-info" href="<?php echo base_url() ?>Kriteria">Kembali</a>
              <button type="submit" class="btn btn-primary">OK</button>
            <?php echo form_close() ?>
            </div>
          </div>
        </div>        
        <!-- /page content -->

        <?php $this->load->view('layouts/footer_admin'); ?>