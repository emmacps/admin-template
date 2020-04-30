
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- DataTable script -->
<script src="plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables/js/responsive.bootstrap4.min.js"></script>

<script src="plugins/datatables/js/dataTables.buttons.min.js" charset="utf-8"></script>
<script src="plugins/datatables/js/buttons.flash.min.js" charset="utf-8"></script>
<script src="plugins/datatables/js/jszip.min.js" charset="utf-8"></script>
<script src="plugins/datatables/js/pdfmake.min.js" charset="utf-8"></script>
<script src="plugins/datatables/js/vfs_fonts.js" charset="utf-8"></script>
<script src="plugins/datatables/js/buttons.html5.min.js" charset="utf-8"></script>
<script src="plugins/datatables/js/buttons.print.min.js" charset="utf-8"></script>



<script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  } );
} );
</script>


</body>
</html>
