<?php

$jquery = "";
$jquery_ui = "";
$bootstrap = "";
$morris_js="";
$sparkline="";
$datatables= "";
$jvectormap= "";
$jquery_knob_js="";
$daterangepicker="";
$datepicker="";
$wysihtml5="";
$slimscroll="";
$fastclick="";
$adminlte="";
$common ="";



// Page Cases

switch ($page_name) {

	case 'dashboard': // Dashboard

		//Library
		echo "";

		//Specific scripts to Page only
		echo "";
		

		break;

	case 'value':
		# code...
		break;

	case 'value':
		# code...
		break;

	case 'value':
		# code...
		break;
	
	default:
		?>


<!-- jQuery -->
<script src="dist/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="dist/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="dist/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable();
  });
</script>

		<?php
		break;
}


?>

</body>
</html>