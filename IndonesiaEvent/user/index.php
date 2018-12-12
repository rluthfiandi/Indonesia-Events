<?php
	
	include 'config/koneksi.php';

	session_start();

	if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; 
	    else $halaman = "index";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Indonesia Events</title>

	<script src="bootstrap/js/jquery.js"></script>
	
	<!-- Memanggil CSS bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	
	<link rel="stylesheet" href="bootstrap/datepicker/themes/base/jquery.ui.all.css">
		<!-- Start JS Datepicker -->
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>



	<style type="text/css">
	    .row {
	    	padding-bottom: 15px;
	    	padding-top: 15px;
	    }
	    
	</style>
</head>


<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background: #dddbdb">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a href="index.php"><img src="images/header.png" width="300px" height="50px" sizes="relative"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				    <li>
				        <a href="index.php?halaman=about" style="color: #010102">
				            <span class="glyphicon glyphicon-list-alt"></span>
				            ABOUT
				        </a>
				    </li>
				    <li>
				        <a href="index.php?halaman=info" style="color: #010102">
				        	<span class="glyphicon glyphicon-road"></span>
				            INFO EVENTS
				        </a>
				    </li>
					  <li>
				        <a href="index.php?halaman=permohonan" style="color: #010102">
				            <span class="glyphicon glyphicon-upload"></span>
				            PERMOHONAN
				        </a>
				    </li>
				    <li>
				        <a href="index.php?halaman=pemesanan" style="color: #010102">
				            <span class="glyphicon glyphicon-pencil"></span>
				            PEMESANAN
				        </a>
				    </li>
					 <li>
				        <a  style="color: #010102">
				            <span class="glyphicon glyphicon-user"></span>
				            HI <?php echo $_SESSION['username']; ?>
				        </a>
				    </li>
					<li>
				        <a href="../config/proses_logout.php"  style="color: #010102">
				            <span class="glyphicon glyphicon-log-out"></span>
				            LOGOUT
				        </a>
				    </li>
				    
				</ul>
			</div>
			<!-- / navbar collapse -->
		</div>
		<!-- / container -->
	</nav>

	<?php

		if ($halaman=='index')
			include 'slideimage.php';
		elseif ($halaman=='cara_pesan')
			include 'cara_pesan.php';
	?>

	<!-- Content -->
	<div class="container">
		<div class="row">
			<br>
			<br>
			<div class="col-md-12">
				
			</div>
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<?php
					
					//menu navbar
					if ($halaman=='info')
						include 'info.php';
					elseif ($halaman=='pemesanan')
						include 'pemesanan.php';
					elseif ($halaman=='proses_pesan')
						include 'proses_pesan.php';
					elseif ($halaman=='permohonan')
						include 'permohonan.php';
					elseif ($halaman=='invoice')
						include 'invoice.php';

					//footer
					elseif ($halaman=='info_pembayaran')
						include 'info_pembayaran.php';
					elseif ($halaman=='about')
						include 'about.php';



				?>
				<br><br>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
		
		<br><br><br><br><br><br>

	</div>

	<footer style="background:#010102;">
	    <div class="container">
	    	<!-- Contact us form -->
	    	<div class="col-md-4">
	    		<div class="headline">
	    		    <h4><font color="#FFFFFF">CONTACT US</font></h4>
	    		</div>
	    		<hr>
	    		<div class="content">
	    			<font color="#FFFFFF">
	    				<h5>
	    					<p>
	    						<span class="glyphicon glyphicon-map-marker">&nbsp;</span>
	    					    Jl. Raya Bandung-Sumedang km.21 Jatinangor, Kab. Sumedang 45363 Jawa Barat
	    					</p>

	   
	    					<p>
	    						<span class="glyphicon glyphicon-calendar">&nbsp;</span>
	    						Sunday - Saturday
	    					</p>
	    					<p>
	    						<span class="glyphicon glyphicon-time">&nbsp;</span>
	    						9:00 AM until 5:00 PM
	    					</p>
	    				</h5>
	    			</font>            
	    		</div>
	    	</div>
	    	<div class="col-md-4">
	    	    <div class="headline">
	    	        <h4><font color="#FFFFFF">Indonesia Events</font></h4>
	    	    </div>
	    	    <hr>
	    	    <div class="content">
	    	    	<font color="#FFFFFF">
	    				<h5>
	    					<p>
	    						Indonesia Events Bandung    
	    					</p>
	    					<p>
	    						Indonesia Events Jakarta
	    					</p>
	    				</h5>
	    			</font>            
	    	    </div>
	    	</div>
	    	<div class="col-md-4">
	    	    <div class="headline">
	    	        <h4><font color="#FFFFFF">ABOUT US</font></h4>
	    	    </div>
	    	    <hr>
	    	    <div class="content">
	    	    	<font color="#FFFFFF">
	    				<h5>
	    					<p>
	    						<a href="index.php?halaman=info_pembayaran" style="color: #FFFFFF">
	    							INFO PEMBAYARAN
	    						</a>    
	    					</p>
	    					<p>
	    						<a href="index.php?halaman=about" style="color: #FFFFFF">
	    							ABOUT INDONESIA EVENTS
	    						</a>
	    					</p>
	    				</h5>
	    			</font>            
	    	    </div>	
	    	</div>
	    	<!--</div>-->

	    	<div class="col-md-12 text-center">
	    		<hr>
	    		<font color="#FFFFFF">
	    			<p>
	    				Copyright &copy; Indonesia Events. 2018
	    			</p>
	    		</font>
	    	</div>	
	    		
	    </div>
	</footer>

</body>
		<!-- <script src="bootstrap/datepicker/ui/jquery.ui.core.js"></script>
		<script src="bootstrap/datepicker/js/ui/jquery-ui.-1.8.19.custom.js"></script>

		<script src="bootstrap/datepicker/ui/jquery.ui.widget.js"></script>
		<script src="bootstrap/datepicker/ui/jquery.ui.datepicker.js"></script> -->
		<script>
			$(function() {
			    $( "#date" ).datepicker(
			    	format: 'MM/DD/YYYY'
			    		
			    );
			});
		</script> 
		<script>
	            $(".input-group.date").datepicker({autoclose: true, todayHighlight: true})
	    </script>
	    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>