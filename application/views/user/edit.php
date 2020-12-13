<?php $this->load->view('layouts/header_admin'); ?>

        <!-- page content -->
        <div class="right_col">
            <div class="container">
      <br/><br/><br/>
      <legend>Edit User</legend>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <?php echo form_open('User/update/'.$User->id_user); ?>
        <?php echo form_hidden('id_user', $User->id_user) ?>
       
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email" value="<?php echo $User->email ?>">
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" value="<?php echo $User->username ?>">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="<?php echo $User->password ?>">
        </div>
        <div class="form-group">
          <label> Privilege </label>
              <select class="form-control" name ="privilege" id="privilege"> 
                <option selected>
                <?php
                  foreach($user_level as $k) {
                    $s='';
                      if($k->id_user_level == $User->id_user_level)
                      { $s='selected'; }
                ?>
                 <option value="<?php echo $k->id_user_level ?>" <?php echo $s ?>>
                    <?php echo $k->user_level ?>
                  </option>
                  <?php } ?>
            </select>
        </div>

        <a class="btn btn-info" href="<?php echo base_url('User/index') ?>">Kembali</a>
        <button type="submit" class="btn btn-primary">OK</button>
      <?php echo form_close(); ?>
      </div>
</div>
        </div>        
        <!-- /page content -->

        <?php $this->load->view('layouts/footer_admin'); ?>