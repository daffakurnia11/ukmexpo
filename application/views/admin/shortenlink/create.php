<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <!-- Content -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Pembuatan Shorten Link</h6>
    </div>
    <form action="" method="post">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Nama Shorten Link</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Shorten Link Breakpoint" value="<?= set_value('name'); ?>">
              <?= form_error('name', '<div class="text-danger mt-2 ml-2">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="shorten">Alamat Shorten Link</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">ukmexpoits.com/</span>
                </div>
                <input type="text" class="form-control" id="shorten" name="shorten" placeholder="WebBreakpoint" value="<?= set_value('shorten'); ?>">
              </div>
              <?= form_error('shorten', '<div class="text-danger  ml-2">', '</div>'); ?>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="origin">Alamat Asli</label>
          <input type="text" class="form-control" id="origin" name="origin" placeholder="https://breakpoint.id/" value="<?= set_value('shorten'); ?>">
          <?= form_error('origin', '<div class="text-danger mt-2 ml-2">', '</div>'); ?>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Buat Shorten Link!</button>
      </div>
    </form>
  </div>
  <!-- End of Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->