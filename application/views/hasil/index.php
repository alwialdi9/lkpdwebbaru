<div class="container-fluid">

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Hasil</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-center">
                    <tr>
                      <th class="text-center" scope="" width="6%">No</th>
                      <th scope="">Nama</th>
                      <th scope="">NIS</th>
                      <th scope="">Nilai</th>
                      <th scope="">Detail</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php 
                    $i = 1;
                    foreach ($ambil as $h) : ?>
                    <tr>
                      <td class="text-center"><?= $i ?></td>
                      <td class="text-center"><?= $h['nama'] ?></td>
                      <td class="text-center"><?= $h['nis'] ?></td>
                      <td class="text-center"><?= $h['nilai'] ?></td>
                      <td class="text-center">
                      <a href="<?= base_url('user/edit/').$h['id'] ?>" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Detail</a>
                      </td>
                    </tr>
                    <?php $i++; 
                  endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    <!-- ajax edit -->
      <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Hasil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Hasil</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value=""><?= $hasil ?></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
          </div>