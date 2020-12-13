<?php $this->load->view('layouts/header_admin'); ?>

        <!-- page content -->
        <div class="right_col">
          <div class="container">
            <br/><br/><br/>
            <legend>Tambah Sub Kriteria</legend>
            <?php $error=$this->session->flashdata('message');
                  if($error) {?>
                  <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
                  </div>
                  <?php }?> 
            <div class="col-xs-12 col-sm-12 col-md-12">
            <?php echo form_open('Sub_kriteria/store'); ?>
              
            <div class="form-group">
            <label> Kode Kriteria </label>
                  <select class="form-control" name ="id_kriteria" id="id_kriteria"> 
                  <option selected> --Pilih Kode Kriteria-- </option>
                  <?php foreach ($kriteria as $k) { ?>
                  <option value="<?php echo $k->id_kriteria?>"><?php echo $k->kode_kriteria?></option>
                <?php } ?>
                </select>
            </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Sub Kriteria">
              </div>
              <div class="form-group">
                <label for="nilai">Nilai</label>
                <input type="text" class="form-control" id="nilai" name="nilai" placeholder="Masukkan Nilai Sub Kriteria">
              </div>
              

              <a class="btn btn-info" href="<?php echo base_url() ?>Sub_kriteria">Kembali</a>
              <button type="submit" class="btn btn-primary">OK</button>
            <?php echo form_close() ?>
            </div>
          </div>
        </div>        
        <!-- /page content -->

        <?php $this->load->view('layouts/footer_admin'); ?>