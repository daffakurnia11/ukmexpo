<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <!-- Content -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Shorten Link</h6>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="datatables" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal Buat</th>
            <th>Nama Shorten Link</th>
            <th>Shorten Link</th>
            <th>URL Asli</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($lists as $list) : ?>
            <tr>
              <td class="text-center"><?= $i++; ?></td>
              <td><?= $list['date_created']; ?></td>
              <td><?= $list['name']; ?></td>
              <td class="text-nowrap">
                <a href="<?= base_url('') . $list['shorten']; ?>" target="_blank">
                  ukmexpoits.com/<?= $list['shorten']; ?>
                </a>
              </td class="text-wrap">
              <td>
                <a href="<?= $list['origin']; ?>" target="_blank">
                  <?= $list['origin']; ?>
                </a>
              </td>
              <td class="text-center">
                <a href="<?= base_url('shorten/delete_shorten?shorten=' . $list['shorten']); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Tanggal Buat</th>
            <th>Nama Shorten Link</th>
            <th>Shorten Link</th>
            <th>URL Asli</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- End of Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->