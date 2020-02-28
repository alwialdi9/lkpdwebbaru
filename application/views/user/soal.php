<div class="content-body">
        <div class="container">
          <form action="<?= base_url('cekjawaban') ?>" method="post" name="jawabansoal">
            <input type="hidden" name="nama" id="nama" value="<?= $this->session->userdata('name')?>">
            <input type="hidden" name="nis" id="nis" value="<?= $this->session->userdata('nis') ?>">
            <div class="isian">
          <?php
          $i = 1;
          $query = $this->db->query("SELECT * FROM tb_soal");
          foreach ($query->result_array() as $row) : ?>
            <div class="card">
              <div class="card-body">
            <p class="card-text mb-auto" style="font-size: 20px;"><?= $i.". ".$row['soal'] ?></p><br>
            <?php 
            $result = $this->db->query("SELECT * FROM tb_jawaban WHERE pertanyaan_id =".$row['id']);
            foreach ($result->result_array() as $baris) :
            ?>
            <div class="custom-control custom-radio">
    <input type="radio" id="customRadio<?=$baris['id']?>" name="<?=$baris['pertanyaan_id']?>" class="custom-control-input" data-id="<?= $baris['id'] ?>" value="<?= $baris['id'] ?>">
    
                  <label class="custom-control-label" for="customRadio<?=$baris['id']?>"><?= $baris['jawaban'] ?></label>
                </div>
                <br>
            <?php
          endforeach;?>
          </div>
            </div>
            <br>
          <?php
            $i++;
        endforeach;
            ?>
            </div>
            <div class="form-row align-items-center">
              <div class="col-auto my-1">
      <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
        <label class="custom-control-label" for="customControlAutosizing">Saya yakin dengan jawaban saya!</label>
      </div>
      </div>
        <div class="col-auto my-1">
    <button type="submit" class="btn btn-outline-primary mt-3 float-right selesai" id="selesai" disabled="">Selesai</button>
  </div>
  </div>
      </form>
      </div>
    </div>