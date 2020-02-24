<div class="container-fluid">

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Soal</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-center">
                    <tr>
                      <th scope="" width="6%">No</th>
                      <th scope="">Soal</th>
                      <th scope="" width="20%">Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php 
                    $i = 1;
                    foreach ($ambil as $p) : ?>
                    <tr>
                      <td class="text-center"><?= $i ?></td>
                      <td><?= $p['soal'] ?></td>
                      <td class="text-center">
                      <a href="<?= base_url('soal/edit/').$p['id'] ?>" class="btn btn-info">Edit</a>
                      <a href="<?= base_url('soal/hapus/').$p['id'] ?>" class="btn btn-danger">Delete</a>
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
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Soal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Soal</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value=""><?= $soal ?></textarea>
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