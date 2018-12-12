<?php
	include '../config/koneksi.php';

	session_start();

	if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; 
	    else $halaman = "index";

	$id_admin=session_id();
	$id_login= $_SESSION['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin Indonesia Events</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/sb-admin.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top" rol="navigation" style="background: #3e5e91">
			<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" style="color: #f9ecf2">Halaman Admin Indonesia Events</a>
			</div>

			<!-- MENU -->
			<ul class="nav navbar-nav navbar-right">
			    <li>
			        <a href="../config/proses_logout.php" style="color: #f9ecf2"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
			    </li>
			    <li>
			    	<a href=""></a>
			    </li>
			    <li>
			    	<a href=""></a>
			    </li>
			</ul>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav" style="background: #3e5e91">
					<li>
						<a href="admin.php?halaman=awal" style="color: #FFFFFF"><span class="glyphicon glyphicon-home">&nbsp;</span>Beranda</a>
					</li>
					<li>
						<a href="admin.php?halaman=pesanan" style="color: #FFFFFF"><span class="glyphicon glyphicon-download-alt">&nbsp;</span>Pesanan</a>
					</li>
					<li>
						<a href="admin.php?halaman=permohonan" style="color: #FFFFFF"><span class="glyphicon glyphicon-download-alt">&nbsp;</span>Permohonan Masuk</a>
					</li>
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#demo" style="color: #FFFFFF"><span class="glyphicon glyphicon-list-alt">&nbsp;</span>Manajemen &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-triangle-bottom"></span></a>
						<ul id="demo" class="collapse">
							<li>
								<a href="admin.php?halaman=manajemen_user" style="color: #FFFFFF">User</a>
							</li>
							<li>
								<a href="admin.php?halaman=manajemen_event" style="color: #FFFFFF">Events</a>
							</li>
							<li>
								<a href="admin.php?halaman=manajemen_jadwal" style="color: #FFFFFF">Jadwal</a>
							</li>
						</ul>
					</li>
				
				</ul>
			</div>
		</nav>

		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="col-md-2">
					
				</div>
				<div class="col-md-10">
					<?php
						echo "";
						// jika id session tidak ditemukan, maka diarahkan ke halaman login admin
						if (!isset($_SESSION['id']))
						{   
						        header('location:index.php');
						}

						
    						echo "Selamat Datang ".$_SESSION['username']."";
						
						//menu navigasi admin
						if ($halaman=='awal')
							include 'awal.php';
						elseif ($halaman=='manajemen_user')
							include 'info_user.php';
						elseif ($halaman=='permohonan')
							include 'mohon_masuk.php';
						elseif ($halaman=='manajemen_event')
							include 'info_event.php';
						elseif ($halaman=='manajemen_jadwal')
							include 'info_jadwal.php';
						elseif ($halaman=='pesanan')
							include 'pesanan.php';


						//halaman edit
						elseif ($halaman=='edit_user')
							include 'edit_user.php';
						elseif ($halaman=='edit_info')
							include 'edit_info.php';
						elseif ($halaman=='edit_event')
							include 'edit_event.php';
						elseif ($halaman=='edit_jadwal')
							include 'edit_jadwal.php';
					

					?>
				</div>
			</div>
		</div>

	</div>
	
	<!-- jQuery -->
	<script src="../bootstrap/js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<!-- Morris Charts JavaScript -->
	<script src="../bootstrap/js/plugins/morris/raphael.min.js"></script>
	<script src="../bootstrap/js/plugins/morris/morris.min.js"></script>
	<script src="../bootstrap/js/plugins/morris/morris-data.js"></script>
</body>
</html>