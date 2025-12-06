  <!-- Main Footer -->
  <footer class="main-footer">
      <strong>Copyright &copy; <?= date('Y') ?> <a href="https://gifthousenutritionshop.com/">aonebox</a>.</strong>
      All rights reserved.
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src=<?= base_url("public/admin/plugins/jquery/jquery.min.js") ?>></script>
  <!-- Bootstrap -->
  <script src=<?= base_url("public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
  <!-- overlayScrollbars -->
  <script src=<?= base_url("public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") ?>></script>
  <!-- AdminLTE App -->
  <script src=<?= base_url("public/admin/dist/js/adminlte.js") ?>></script>
  <script src=<?= base_url("public/admin/dist/js/adminlte2167.js") ?>></script>
  <script src=<?= base_url("public/admin/dist/js/adminlte.min2167.js") ?>></script>


  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src=<?= base_url("public/admin/plugins/jquery-mousewheel/jquery.mousewheel.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/raphael/raphael.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/jquery-mapael/jquery.mapael.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/jquery-mapael/maps/usa_states.min.js") ?>></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>

  <!-- DataTables  & Plugins -->
  <script src=<?= base_url("public/admin/plugins/datatables/jquery.dataTables.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/jszip/jszip.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/pdfmake/pdfmake.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/pdfmake/vfs_fonts.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/datatables-buttons/js/buttons.html5.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/datatables-buttons/js/buttons.print.min.js") ?>></script>
  <script src=<?= base_url("public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js") ?>></script>
  
  
  <script>
      $(function() {
          $("#example1").DataTable({
              "responsive": true,
              "lengthChange": false,
              "autoWidth": false,
              //   "buttons": ["copy", "csv", "excel", "pdf", "print"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
          });
      });
  </script>
  
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>


  </body>

  </html>