<?php $this->load->view('layouts/header_admin'); ?>

        <!-- page content -->
        <div class="right_col">
          <div class="container">
            <br/><br/><br/>
            <legend>Tambah Data Alternatif</legend>
            <?php $error=$this->session->flashdata('message');
                  if($error) {?>
                  <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
                  </div>
                  <?php }?> 
            <div class="col-xs-12 col-sm-12 col-md-12">
            <?php echo form_open('Alternatif/store'); ?>
              
             
              <div class="form-group">
                <label for="nama">Nama Alternatif</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Keterangan Nama Tenaga Kerja">
              </div>
              <div class="form-group">
            <label> </label>
                  <select class="form-control" name ="type" id="type"> 
                  <option selected> - </option>
                  <?php foreach ($type as $k) { ?>
                  <option value="<?php echo $k->id_sub_kriteria?>"><?php echo $k->deskripsi?></option>
                <?php } ?>
                </select>
            </div>
              <div class="form-group">
            <label> Status </label>
                  <select class="form-control" name ="status" id="status"> 
                  <option selected> --Pilih Jenis Kriteria-- </option>
                  <option value="aktif">Aktif</option>
                  <option value="dikunci">Kunci</option>
                </select>
            </div>
           

              <a class="btn btn-info" href="<?php echo base_url() ?>Alternatif">Kembali</a>
              <button type="submit" class="btn btn-primary">OK</button>
            <?php echo form_close() ?>
            </div>
          </div>
        </div>        
        <!-- /page content -->

        <?php $this->load->view('layouts/footer_admin'); ?>