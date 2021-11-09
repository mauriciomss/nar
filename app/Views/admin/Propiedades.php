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
								<li class="breadcrumb-item"><a href="<?=base_url('dashboard');?>">Inicio</a></li>
								<li class="breadcrumb-item active"><?=$title;?></li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->


			<!-- Main content -->
			<section class="content">
				
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Listado</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<table id="example1" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Titulo</th>
											<th>Sub titulo</th>
											<th>Precio</th>
											<th>*</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($propiedades as $item): ?>
										<tr id="tr-<?php echo $item['id'] ?>">
											<td><?php echo $item['titulo'] ?></td>
											<td><?php echo $item['subtitulo'] ?></td>
											<td><?php echo $item['signo'].' '.$item['precio'] ?></td>
											<td>
												<button type="button" class="btn btn-xs btn-secondary imagenes" rel="<?php echo $item['id'] ?>" >
													<i class="nav-icon fas fa-user-edit"></i> Imagenes
												</button>
												<button type="button" class="btn btn-xs btn-primary editar" rel="<?php echo $item['id'] ?>" >
													<i class="nav-icon fas fa-user-edit"></i> Editar
												</button>
												<button type="button" class="btn btn-xs btn-danger eliminar" rel="<?php echo $item['id'] ?>" >
													<i class="nav-icon fas fa-trash"></i> Eliminar
												</button>
											</td>
										</tr>											
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
							<div class="card-footer clearfix">
							<button type="button" id="crearnuevo" class="btn btn-info float-right">
								<i class="fas fa-plus"></i> Agregar nuevo
							</button>
							</div>							
						</div>
						<!-- /.card -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->  

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

  	<!-- DataTables -->
  	<link rel="stylesheet" href="<?=base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css');?>">
	<script src="<?=base_url('assets/admin/plugins/datatables/jquery.dataTables.js');?>"></script>
	<script src="<?=base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js');?>"></script>

	<!-- page script -->
	<script>
		$(function () {
			$("#example1").DataTable({
				"paging": true,
				"lengthChange": true,
				"searching": true,
				'aaSorting'   : [],
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"aLengthMenu": [ 10, 15, 20, 50, 100 ],
			});
		});

    $(document).ready(function() {

		$(document).on("click",".imagenes", function(event) {
			var id = $(this).attr('rel');
			var url = "<?=base_url('/admin/propiedades/imagenes/');?>";
			window.location.href = url+"/"+id;
            return false;
        });

		$(document).on("click",".editar", function(event) {
			var id = $(this).attr('rel');
			var url = "<?=base_url('/admin/propiedades/editar/');?>";
			window.location.href = url+"/"+id;
            return false;
        });

		$(document).on("click","#crearnuevo", function(event) {
            window.location.href = "<?=base_url('admin/propiedades/nuevo');?>";
            return false;
        });


		$(document).on("click",".eliminar", function(event) {
			var id = $(this).attr('rel');
			var url = "<?=base_url('/admin/propiedades/eliminar/');?>";
			//window.location.href = ;
        
		if(confirm('Seguro de Eliminar este registro?')){
			//e.preventDefault();
			//var parent = $(this).parent();
			$.ajax({
				type: 'get',
				url: url+"/"+id,
				data: 'ajax=1',
				beforeSend: function() {
					$("#tr-"+id).animate({'backgroundColor':'#fb6c6c'},300);
			},
				success: function() {
					$("#tr-"+id).slideUp(300,function() {
						$("#tr-"+id).remove();
					});
				}
			});
		}
	});

    });

	</script>
	
	<?php //include "parciales/SCRIPTParcial.php"; ?>
</body>
</html>

