<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <!-- Content -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Pengunjung Mahasiswa</h6>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="datatables" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal Buat</th>
            <th>Nama Pengunjung</th>
            <th>NRP</th>
            <th>Departemen</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($lists as $list) : ?>
            <tr>
              <td class="text-center"><?= $i++; ?></td>
              <td><?= $list['date_created']; ?></td>
              <td><?= $list['name']; ?></td>
              <td><?= $list['nrp']; ?></td>
              <td><?= $list['major']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Tanggal Buat</th>
            <th>Nama Pengunjung</th>
            <th>NRP</th>
            <th>Departemen</th>
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