<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Hasil</h6>
    </div>
    <div class="card-body">
      NIS : <?= $detail_nis ?><br>
      Nama: <?= $detail_nama ?><br>
      Nilai: <?= $detail_nilai ?><br>
      Keterangan: <?= $keterangan ?><br>
      <?php
      $a = 1;
      foreach ($detail_soal as $soal) : ?>
        Soal <?= $a ?>. <?= $soal['soal'] ?><br>

      <?php
        $a++;
      endforeach;
      ?>
    </div>
  </div>
</div>
</div>