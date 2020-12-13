<?php 
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Perhitungan.xls");
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>SPK dengan Metode WASPAS</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
<table border='1' bgcolor="FF FF 00">
          <thead>
          <tr>
          <th colspan="6" bgcolor="ff8c00"> <b>Penilaian Alternatif</b></th>
          </tr>
            <tr>
              <th>Alternatif</th>
              <?php foreach ($kriteria as $key): ?>
                <th><?= $key->kode_kriteria ?></th>
              <?php endforeach ?>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($tenaga_kerja as $keys): ?>
              <tr>
                <td><?= $keys->nama ?></td>
                <?php foreach ($kriteria as $key): ?>
                  <td>
                    <?php 
                    $id_user=$this->session->userdata('id_user');
                      $data_pencocokan = $this->Perhitungan_model->data_nilai($id_user,$keys->id_daron,$key->id_kriteria);
                      $penilaian_type=$this->Perhitungan_model->penilaian_type($keys->id_daron);
                      if($key->id_kriteria==1){
                        echo $penilaian_jabatan['nilai'];
                      }else{
                      echo $data_pencocokan['nilai'];
                      }
                    ?>
                  </td>
                <?php endforeach ?>
                </tr>
                <?php endforeach ?>

          </tbody>
        </table>
        <br>
        <br>
        <table border='1' bgcolor="FF FF 00">
          <thead>
          <tr>
          <th colspan="6" bgcolor="ff8c00"> <b>Matrik Normalisasi</b></th>
          </tr>
          <tr>
              <th>Alternatif</th>
              <?php foreach ($kriteria as $key): ?>
                <th><?= $key->kode_kriteria ?></th>
              <?php endforeach ?>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($tenaga_kerja as $keys): ?>
          <tr>
                <td><?= $keys->nama ?></td>
                <?php foreach ($kriteria as $key): ?>
                  <td>
                    <?php 
                    $id_user=$this->session->userdata('id_user');
                      $data_pencocokan = $this->Perhitungan_model->data_nilai($id_user,$keys->id_daron,$key->id_kriteria);
                      $min_max=$this->Perhitungan_model->get_max_min($id_user,$key->id_kriteria);
                      if($min_max['jenis']=='Benifit'){
                      echo $data_pencocokan['nilai']/$min_max['max'];
                      }else{
                        echo $min_max['min']/$data_pencocokan['nilai'];
                      }
                    ?>
                  </td>
                <?php endforeach ?>

               
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <br>
        <br>
        <table border='1' bgcolor="FF FF 00">
          <thead>
          <tr>
          <th colspan="5" bgcolor="ff8c00"> <b>Bobot Kriteria</b></th>
          </tr>
          <tr>
              <?php foreach ($kriteria as $key): ?>
                <th><?= $key->kode_kriteria ?></th>
              <?php endforeach ?>
            </tr>
          </thead>
          <tbody>
          <?php //foreach ($tenaga_kerja as $keys): ?>
          <tr>
                <?php foreach ($kriteria as $key): ?>
                  <td>
                    <?php 
                    echo $key->bobot/100;
                    ?>
                  </td>
                <?php endforeach ?>

               
              </tr>
            <?php //endforeach ?>
          </tbody>
        </table>
        <br>
        <br>
        <table border='1' class="table table-hover table-bordered">
          <thead>
          <tr>
          <th colspan="2" bgcolor="ff8c00"> <b>Nilai QI</b></th>
          </tr>
            <tr>
              <th bgcolor="FF FF 00">Alternatif</th>
              <th bgcolor="ff8c00">Nilai Qi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tenaga_kerja as $keys): ?>
              <tr>
                <td bgcolor="FF FF 00"><?= $keys->nama; ?></td>
                <td bgcolor="ff8c00">
                  <?php 
                    $ta = 0;
                    $pa = 1;
                    foreach ($kriteria as $key) {
                      $id_user=$this->session->userdata('id_user');
                      $data_pencocokan = $this->Perhitungan_model->data_nilai($id_user,$keys->id_daron,$key->id_kriteria);
                      $min_max=$this->Perhitungan_model->get_max_min($id_user,$key->id_kriteria);

                          if($min_max['jenis']=='Benifit'){
                            $p = $data_pencocokan['nilai']/$min_max['max'];
                          }else{
                            $p = $min_max['min']/$data_pencocokan['nilai'];
                          }
                      $bobot=$key->bobot/100;
                      $ta += $p*$bobot;
                      $pa *= pow($p,$bobot);
                      $qi=(0.5*$ta)+(0.5*$pa);
                      
                    }
                    echo $qi;
                    $hasil_max[]=$qi;
                    $id[] = $keys->id_daron;
                  ?>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <br>
        <br>
        <table border='' class="table table-hover table-bordered">
          <thead>
          <?php 
         $i = array_search(max($hasil_max), $hasil_max);
         $max = $id[$i];
          $hasil = max($hasil_max);
          $daron_terpilih = $this->Perhitungan_model->hasil($max);
        ?>
          <tr>
          <th colspan="6" bgcolor="ff8c00"> <b>Hasil Keputusan</b></th>
          </tr>
            <tr>
              <th colspan="6" bgcolor="FF FF 00">Hasil perhitungan menggunakan metode WASPAS</th>
            </tr>
            <tr>
              <th colspan="6" bgcolor="FF FF 00">Alternatif terbaik adalah  <b><?= $daron_terpilih['nama']?></b> dengan jumlah <b><?= "Qi=".$hasil ?></b></th>
            </tr>
          </thead>
        </table
        
        
        

</body>
</html>