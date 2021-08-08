<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; <a href="https://breakpoint.id">Breakpoint</a></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Akhiri Sesi Admin?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Klik <strong>Logout</strong> untuk mengakhiri sesi admin. Terima kasih</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?= base_url('admin/logout'); ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/dist/'); ?>jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>bootstrap4/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/dist/'); ?>datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/dist/'); ?>datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/dist/'); ?>datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/dist/'); ?>jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/js/'); ?>sb-admin-2.min.js"></script>
<!-- Page specific script -->
<script>
  $(function() {
    $("#datatables").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["csv", "excel", "colvis"]
    }).buttons().container().appendTo('#datatables_wrapper .col-md-6:eq(0)');
  });
</script>

</body>

</html>