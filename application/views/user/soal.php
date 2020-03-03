<div class="content-body">
  <div class="container">
    <h3 class="font-weight-bold mb-3">Jawablah pertanyaan berikut dengan tepat dan benar!</h3>
    <form action="" method="post" name="jawabansoal" id="jawabansoal">
      <input type="hidden" name="nama" id="nama" value="<?= $this->session->userdata('name') ?>">
      <input type="hidden" name="nis" id="nis" value="<?= $this->session->userdata('nis') ?>">
      <div class="isian">
        <?php
        $i = 1;
        $query = $this->db->query("SELECT * FROM tb_soal");
        foreach ($query->result_array() as $row) : ?>
          <div class="card">
            <div class="card-body" id="<?= $i ?>">
              <p class="card-text mb-auto" style="font-size: 20px;"><?= $i . ". " . $row['soal'] ?></p><br>
              <?php
              $result = $this->db->query("SELECT * FROM tb_jawaban WHERE pertanyaan_id =" . $row['id']);
              foreach ($result->result_array() as $baris) :
              ?>
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio<?= $baris['id'] ?>" name="<?= $baris['pertanyaan_id'] ?>" class="custom-control-input" data-id="<?= $baris['id'] ?>" value="<?= $baris['id'] ?>">

                  <label class="custom-control-label" for="customRadio<?= $baris['id'] ?>"><?= $baris['jawaban'] ?></label>
                </div>
                <br>
              <?php
              endforeach; ?>
            </div>
          </div>
          <br>
        <?php
          $i++;
        endforeach;
        ?>
      </div>
      <div class="card" id="soalgambar">
        <div class="card-body">
          <h3 class="font-weight-bold mb-3">Pasangkan gambar hewan sesuai dengan habitatnya</h3>

          <div id="box">
            <div class="row">
              <div class="col">
                <div id="div1">
                  <img src="<?= base_url('assets') ?>/images/buaya.jpg" id="drag1" width="400" height="300">
                </div>
              </div>
              <div class="col">
                <div id="div2">


                </div>
                <a href="#" class="btn btn-primary float-right mt-3" id="pilih" data-toggle="modal" data-target=".bd-example-modal-lg" data-id="div2">Pilih Habitat</a>
              </div>
            </div>
          </div>

          <div id="box" class="mt-3">
            <div class="row">
              <div class="col">
                <div id="div1">
                  <img src="<?= base_url('assets') ?>/images/rusa.jpg" id="drag1" width="400" height="300">
                </div>
              </div>
              <div class="col">
                <div id="div3">

                </div>
                <a href="#" class="btn btn-primary float-right mt-3" id="pilih2" data-toggle="modal" data-target=".bd-example-modal-lg" data-id="div3">Pilih Habitat</a>
              </div>
            </div>
          </div>

          <div id="box" class="mt-3">
            <div class="row">
              <div class="col">
                <div id="div1">
                  <img src="<?= base_url('assets') ?>/images/burung.jpg" id="drag1" width="400" height="300">
                </div>
              </div>
              <div class="col">
                <div id="div4">

                </div>
                <a href="#" class="btn btn-primary float-right mt-3" id="pilih3" data-toggle="modal" data-target=".bd-example-modal-lg" data-id="div4">Pilih Habitat</a>
              </div>
            </div>
          </div>

          <div id="box" class="mt-3">
            <div class="row">
              <div class="col">
                <div id="div1">
                  <img src="<?= base_url('assets') ?>/images/lumba.jpg" id="drag1" width="400" height="300">
                </div>
              </div>
              <div class="col">
                <div id="div5">

                </div>
                <a href="#" class="btn btn-primary float-right mt-3" id="pilih4" data-toggle="modal" data-target=".bd-example-modal-lg" data-id="div5">Pilih Habitat</a>
              </div>
            </div>
          </div>

          <div id="box" class="mt-3">
            <div class="row">
              <div class="col">
                <div id="div1">
                  <img src="<?= base_url('assets') ?>/images/katak.jpg" id="drag1" width="400" height="300">
                </div>
              </div>
              <div class="col">
                <div id="div6">

                </div>
                <a href="#" class="btn btn-primary float-right mt-3" id="pilih5" data-toggle="modal" data-target=".bd-example-modal-lg" data-id="div6">Pilih Habitat</a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-auto my-1">
        <button type="submit" class="btn btn-outline-primary mt-3 float-right selesai" id="selesai">Selesai</button>
      </div>

    </form>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Pilih Habitat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row ml-2">
          <a href="#" id="langit" class="mx-auto"><img src="<?= base_url('assets') ?>/images/langit.jpg" class="rounded mb-3" alt="..." width="300" height="150"></a>
          <a href="#" id="laut" class="mx-auto"><img src="<?= base_url('assets') ?>/images/laut.jpg" class="rounded mb-3" alt="..." width="300" height="150"></a>
          <a href="#" id="padangrumput" class="mx-auto"><img src="<?= base_url('assets') ?>/images/padangrumput.jpg" class="rounded mb-3" alt="..." width="300" height="150"></a>
          <a href="#" id="rawa" class="mx-auto"><img src="<?= base_url('assets') ?>/images/rawa.jpg" class="rounded mb-3" alt="..." width="300" height="150"></a>
          <a href="#" id="sawah" class="mx-auto"><img src="<?= base_url('assets') ?>/images/sawah.jpg" class="rounded mb-3" alt="..." width="300" height="150"></a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#selesai').on('click', function(e) {
      e.preventDefault();
      swal({
          title: "Apakah Anda Yakin?",
          text: "Jawaban anda akan dimasukkan ke database!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((value) => {
          if (value) {
            $.ajax({
              type: "POST",
              url: "<?= base_url('cekjawaban') ?>",
              data: new FormData($("#jawabansoal")[0]),
              contentType: false,
              cache: false,
              processData: false,
              dataType: "json",
              success: function(data) {

              },
              error: function(data) {
                console.log('Error:', data);
              }
            });
            swal("Success!", "Berhasil Input Jawaban!", "success")
              .then((value) => {
                window.location = "<?= base_url('user') ?>";
              });
          } else {

          }
        });
    });

    // script pilih gambar

    $("#pilih").on("click", function() {
      var id = $(this).attr('data-id');
      console.log(id);

      $("#langit").on("click", function() {
        var img = document.getElementById("imgid");
        var src = document.getElementById(id);
        if (img) {
          src.removeChild(img);
        }
        var x = document.createElement("IMG");
        x.setAttribute("src", "<?= base_url('assets') ?>/images/langit.jpg");
        x.setAttribute("id", "imgid");
        x.setAttribute("width", "400");
        x.setAttribute("height", "300");
        x.setAttribute("alt", "..");

        src.appendChild(x);

      });

      $("#laut").on("click", function() {
        var img = document.getElementById("imgid");
        var src = document.getElementById(id);
        if (img) {
          src.removeChild(img);
        }
        var x = document.createElement("IMG");
        x.setAttribute("src", "<?= base_url('assets') ?>/images/laut.jpg");
        x.setAttribute("id", "imgid");
        x.setAttribute("width", "400");
        x.setAttribute("height", "300");
        x.setAttribute("alt", "..");

        src.appendChild(x);

      });

      $("#rawa").on("click", function() {
        var img = document.getElementById("imgid");
        var src = document.getElementById(id);
        if (img) {
          src.removeChild(img);
        }
        var x = document.createElement("IMG");
        x.setAttribute("src", "<?= base_url('assets') ?>/images/rawa.jpg");
        x.setAttribute("id", "imgid");
        x.setAttribute("width", "400");
        x.setAttribute("height", "300");
        x.setAttribute("alt", "..");

        src.appendChild(x);

      });

      $("#sawah").on("click", function() {
        var img = document.getElementById("imgid");
        var src = document.getElementById(id);
        if (img) {
          src.removeChild(img);
        }
        var x = document.createElement("IMG");
        x.setAttribute("src", "<?= base_url('assets') ?>/images/sawah.jpg");
        x.setAttribute("id", "imgid");
        x.setAttribute("width", "400");
        x.setAttribute("height", "300");
        x.setAttribute("alt", "..");

        src.appendChild(x);

      });

      $("#padangrumput").on("click", function() {
        var img = document.getElementById("imgid");
        var src = document.getElementById(id);
        if (img) {
          src.removeChild(img);
        }
        var x = document.createElement("IMG");
        x.setAttribute("src", "<?= base_url('assets') ?>/images/padangrumput.jpg");
        x.setAttribute("id", "imgid");
        x.setAttribute("width", "400");
        x.setAttribute("height", "300");
        x.setAttribute("alt", "..");

        src.appendChild(x);

      });
    });

    $("#pilih2").on("click", function() {
      var pilih2 = $(this).data('id');
      console.log(pilih2);

      $("#langit").on("click", function() {
        var img2 = document.getElementById("imgid");
        var src2 = document.getElementById(pilih2);
        console.log(src2);
        if (img2) {
          src2.removeChild(img2);
        }
        var x2 = document.createElement("IMG");
        x.setAttribute("src", "<?= base_url('assets') ?>/images/langit.jpg");
        x.setAttribute("id", "imgid");
        x.setAttribute("width", "400");
        x.setAttribute("height", "300");
        x.setAttribute("alt", "..");

        src2.appendChild(x);

      });

      $("#laut").on("click", function() {
        var img = document.getElementById("imgid");
        var src = document.getElementById(pilih2);
        if (img) {
          src.removeChild(img);
        }
        var x = document.createElement("IMG");
        x.setAttribute("src", "<?= base_url('assets') ?>/images/laut.jpg");
        x.setAttribute("id", "imgid");
        x.setAttribute("width", "400");
        x.setAttribute("height", "300");
        x.setAttribute("alt", "..");

        src.appendChild(x);

      });

      $("#rawa").on("click", function() {
        var img = document.getElementById("imgid");
        var src = document.getElementById(id);
        if (img) {
          src.removeChild(img);
        }
        var x = document.createElement("IMG");
        x.setAttribute("src", "<?= base_url('assets') ?>/images/rawa.jpg");
        x.setAttribute("id", "imgid");
        x.setAttribute("width", "400");
        x.setAttribute("height", "300");
        x.setAttribute("alt", "..");

        src.appendChild(x);

      });

      $("#sawah").on("click", function() {
        var img = document.getElementById("imgid");
        var src = document.getElementById(id);
        if (img) {
          src.removeChild(img);
        }
        var x = document.createElement("IMG");
        x.setAttribute("src", "<?= base_url('assets') ?>/images/sawah.jpg");
        x.setAttribute("id", "imgid");
        x.setAttribute("width", "400");
        x.setAttribute("height", "300");
        x.setAttribute("alt", "..");

        src.appendChild(x);

      });

      $("#padangrumput").on("click", function() {
        var img = document.getElementById("imgid");
        var src = document.getElementById(id);
        if (img) {
          src.removeChild(img);
        }
        var x = document.createElement("IMG");
        x.setAttribute("src", "<?= base_url('assets') ?>/images/padangrumput.jpg");
        x.setAttribute("id", "imgid");
        x.setAttribute("width", "400");
        x.setAttribute("height", "300");
        x.setAttribute("alt", "..");

        src.appendChild(x);

      });
    });


  })
</script>