<?php $this->load->view('layouts/header_admin'); ?>

        <!-- page content -->
        <div class="right_col">
        <!-- <h1 style="text-align:center">SELAMAT DATANG ADMIN</h1> -->
        <div class="box-header">
            <h3 class="box-title">
              Penjelasan Aplikasi
            </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <?php if($this->session->userdata('id_user_level') == '1'): ?>
            <p>Aplikasi ini digunakan untuk : </p>
            <ul>
              <!-- <li>Menambahkan Data User (Pengepul dan Peternak)</li> -->
              <li>Menambahkan Data Kriteria</li>
              <li>Menambahkan Data Alternatif</li>
              <li>Menambahkan Data Sub Kriteria</li>
              <li>Mencetak Data Drone</li>
              <li>Menghitung SPK dengan Metode WASPAS</li>
              <li>Sebagai Sitem Pendukung Keputusan untuk Memilih Drone</li>
            </ul>
            <?php endif; ?>
            <?php if($this->session->userdata('id_user_level') == '2'): ?>
            <p>Aplikasi ini digunakan untuk : </p>
            <ul>
              <!-- <li>Menambahkan Data User (Pengepul dan Peternak)</li> -->
              <li>Melihat Data Drone</li>
              <li>Menghitung SPK dengan Metode WASPAS</li>
              <li>Sebagai Sitem Pendukung Keputusan untuk Memilih Drone</li>            
            </ul>
            <?php endif; ?>
          </div>
        </div>        
        <!-- /page content -->

<?php $this->load->view('layouts/footer_admin'); ?>