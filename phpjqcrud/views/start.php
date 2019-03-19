<?php
defined('WEBSITEPATH') OR exit('No direct script access allowed');
$title = WEBSITENAME.' | Bienvenido';
?>
<!DOCTYPE html>
<html>
<head>
<?php
	include_once('includes/head.php');
?>
</head>
<body>
	    <div class="msg" style="z-index: 99 !important">
	    	<?php include 'includes/reports.php'; ?>
	    </div><p>&nbsp;</p>
		<!-- Iconos de formularios en esta dirección https://fontawesome.com/start -->
		<div class="well">
		<div align="center" style="color: blue;font-size: 25px;">Formulario</div>
		</div>
		<p>
		  <div class="container">
		    <div class="row">
		        <div class="col-md-12">
		            <div class="well well-sm">
		            	<?php include 'includes/formulario.php'; ?>
		            </div>

		            <div class="well well-sm">
		            	<?php include 'includes/main_table.php'; ?>
		            </div>
		        </div>
		    </div>
		</div>
		</p>
		<footer>
			<?php include 'includes/footer.php'; ?>
		</footer>
	</body>
</html>