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
								<li class="breadcrumb-item"><a href="<?=base_url('emprendedores');?>">Emprendedores</a></li>
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
								<h3 class="card-title">Subir imagen</h3>
							</div>
							<!-- /.card-header -->

							<div class="card-body">

								<ul id="upload_imagenes" class="mailbox-attachments d-flex align-items-stretch clearfix">
								<?php foreach ($imagenes as $item): ?>
									<li id="img-<?=$item['id'];?>">
										<span class="mailbox-attachment-icon has-img"><img src="<?=base_url();?>/imagenes/<?=$item['file'];?>" alt="Attachment"></span>
										<div class="mailbox-attachment-info">
											<a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> <?=$item['file'];?></a>
											<span class="mailbox-attachment-size clearfix mt-1">
												<span> <?php echo $Gral->formatSizeUnits(filesize( getcwd().'/imagenes/'.$item['file'] ) );?></span>
												<a href="#" class="btn btn-default btn-sm float-right eliminar" rel="<?=$item['id'];?>"><i class="fas fa-trash-alt"></i></a>
											</span>
										</div>
									</li>
								<?php endforeach ?>
								</ul>

							</div>
							<!-- /.card-body -->
							<div class="card-footer clearfix">
								<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Nueva imagen</button>
								<button type="submit" class="btn btn-danger float-right" id="guardar">Guardar</button>
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


	    <!-- Modal -->
	    <div id="myModal" class="modal fade" role="dialog">
	        <div class="modal-dialog">
	            <!-- Modal content-->
	            <div class="modal-content">
	                <div class="modal-body">
	                    <div class="row">
	                        <div class="col-lg-4">
	                            <div id="select_image" style="width:400px"></div>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-lg-4">
	                            <input type="file" id="upload">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer justify-content-between">
	                	<button type="button" class="btn btn-success upload_result">Guardar</button>
	                    <button type="button" class="btn btn-default mr-auto" data-dismiss="modal">Cerrar</button>
	                </div>
	            </div>

	        </div>
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
	<!-- AdminLTE for demo purposes -->
	<script src="<?=base_url('assets/admin/dist/js/demo.js');?>"></script>

	<!-- croppie -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.3/croppie.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.3/croppie.css">

    <?php //include "parciales/SCRIPTParcial.php"; ?>

	    <script type="text/javascript">
	        $uploadCrop = $('#select_image').croppie({
	            enableExif: true,
	            viewport: {
	                width: 450,
	                height: 450,
	                type: 'square'
	            },
	            boundary: {
	                width: 470,
	                height: 470
	            }
	        });


	        $('#upload').on('change', function () {
	            var reader = new FileReader();
	            reader.onload = function (e) {
	                $uploadCrop.croppie('bind', {
	                    url: e.target.result
	                }).then(function(){
	                    console.log('jQuery bind complete');
	                });
	            }
	            reader.readAsDataURL(this.files[0]);
	        });


	        $('.upload_result').on('click', function (ev) {
	            $uploadCrop.croppie('result', {
	                type: 'canvas',
	                size: 'viewport'
	            }).then(function (resp) {
	                $.ajax({
	                    url: "<?=base_url('Emprendedores/imagenRecortada/');?>",
	                    type: "POST",
	                    data: {"image":resp, "id":<?=$emprendimiento_id;?>},
	                    //dataType : 'json',
	                    success: function (data) {
							html = '<li id="img-'+data.id+'">'+
							'			<span class="mailbox-attachment-icon has-img"><img src="'+resp+'" alt="Attachment"></span>'+
							'			<div class="mailbox-attachment-info">'+
							'				<a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> imagen</a>'+
							'				<span class="mailbox-attachment-size clearfix mt-1">'+
							'					<span> </span>'+
							'					<a href="#" class="btn btn-default btn-sm float-right eliminar" rel="'+data.id+'"><i class="fas fa-trash-alt"></i></a>'+
							'				</span>'+
							'			</div>'+
							'		</li>';
	                        $("#upload_imagenes").append(html);
	                        $("#myModal").modal("hide");
	                    }
	                });
	            });
	        });

	        $( document ).on( "click", ".eliminar", function() {
	        	var id = $(this).attr('rel');

            	var v_url = "<?=base_url('emprendedores/imagenes/eliminar/');?>/"+id;
                $.ajax({
                    type: "GET",
                    url: v_url,
                    data: "info=true",
                    dataType : 'json',
                    beforeSend: function() {
                        //$.mobile.loading("show");  // Esto mostrar?? ajax spinner
                    },
                    complete: function() {
                        //$.mobile.loading("hide"); // Esto ocultar?? ajax spinner
                    },
                    success: function (result) {
                        $( "#img-"+id ).remove();
                    },
                    error: function (request,error) {
                        // Esta funci??n de devoluci??n de llamada se activar?? en una acci??n fallida              
                        alert('Se produjo un error de red, por favor intente nuevamente!');
                    }
                });

	        });


	    </script>

</body>
</html>

