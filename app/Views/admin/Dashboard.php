<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <meta name="description" content="Tech Admin">
    <meta name="keywords" content="Tech Admin">
    <meta name="author" content="mauriciomss - https://mauriciomss.github.io/">

    <!-- COLOR -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#40B86A">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#40B86A">
    <!-- = FAV AND TOUCH ICONS = -->
    <link rel="shortcut icon" type="image/png" href="<?=base_url('assets/admin/img/favicon.png');?>" />
    <!--FIN METAS SEO  -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title;?> - Tech Admin</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/fontawesome-free/css/all.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets/admin/dist/css/adminlte.css');?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?=base_url('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">

</head>

<body class="hold-transition sidebar-mini layout-fixed <?php echo session('sidebar') ?>">
	<div class="wrapper">
		
        <?php include 'templates/header.php'; ?>
        <?php include 'templates/menu.php'; ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
		<!-- Content Header (Page header) -->

			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark"><?=$title;?></h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Inicio</a></li>
								<li class="breadcrumb-item active"><?=$title;?></li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->


			<!-- Main content -->
			<section class="content">

				<div class="container-fluid">


                    <?php if (session('cambiar_pass') == "si"): ?>
                    <div class="alert alert-info alert-dismissible">
                        <h5><i class="icon fas fa-info"></i> Hola <?php echo $_SESSION['pw_user']; ?>. </h5>
                        Ya podes cambiar tu contraseña del sistema. Hace click <a href="/usuarios/password">aquí</a>.
                        <div></div><div></div><div></div>
                    </div>
                    <?php endif ?>


					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Informes</h5>

									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse">
											<i class="fas fa-minus"></i>
										</button>
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">

									<!-- Small boxes (Stat box) -->
									<div class="row">


									</div>
									<!-- /.row -->

								</div>
								<!-- ./card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->

				</div>
				<!-- /.container-fluid -->
			
			</section>


		<!-- /.content -->
		</div>
		
		<?php include 'templates/footer.php'; ?>

	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?=base_url('assets/admin/plugins/jquery/jquery.min.js');?>"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?=base_url('assets/admin/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	$.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
	<!-- overlayScrollbars -->
	<script src="<?=base_url('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('assets/admin/dist/js/adminlte.js');?>"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<!--<script src="dist/js/pages/dashboard.js"></script>-->
	<!-- AdminLTE for demo purposes -->
	<script src="<?=base_url('assets/admin/dist/js/demo.js');?>"></script>

	<?php //include "parciales/SCRIPTParcial.php"; ?>
</body>
</html>

