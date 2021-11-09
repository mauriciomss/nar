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
								<li class="breadcrumb-item"><a href="<?=base_url('/admin/propiedades');?>">Propiedades</a></li>
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
								<h3 class="card-title">Formulario</h3>
							</div>
							<!-- /.card-header -->
							
							<form action="<?=base_url('/admin/propiedades/savenuevo');?>" method="post" class="form-horizontal">
								<div class="card-body">

									<?php if(isset($validation)):?>
										<div class="alert alert-danger"><?= $validation->listErrors() ?></div>
									<?php endif;?>

									<div class="form-group row">
	                                    <label for="inputName" class="col-sm-2 col-form-label">Ciudad</label>
	                                    <div class="col-sm-10">
	                                    	<select class="form-control" id="ciudad_id" name="ciudad_id">
	                                    		<?php foreach ($ciudad as $item): ?>
	                                    			<option value="<?=$item['id'] ?>"><?=$item['nombre'] ?></option>
	                                    		<?php endforeach ?>
	                                    	</select>
	                                    </div>
	                                </div>

									<div class="form-group row">
	                                    <label for="inputName" class="col-sm-2 col-form-label">Tipo propiedad</label>
	                                    <div class="col-sm-10">
	                                    	<select class="form-control" id="tipopropiedad_id" name="tipopropiedad_id">
	                                    		<?php foreach ($tipopropiedad as $item): ?>
	                                    			<option value="<?=$item['id'] ?>"><?=$item['nombre'] ?></option>
	                                    		<?php endforeach ?>
	                                    	</select>
	                                    </div>
	                                </div>

	                                <div class="form-group row">
	                                    <label for="inputName" class="col-sm-2 col-form-label">Estado</label>
	                                    <div class="col-sm-10">
	                                    	<select class="form-control" id="estado_id" name="estado_id">
	                                    		<?php foreach ($estado as $item): ?>
	                                    			<option value="<?=$item['id'] ?>"><?=$item['nombre'] ?></option>
	                                    		<?php endforeach ?>
	                                    	</select>
	                                    </div>
	                                </div> 

	                                <div class="form-group row">
	                                    <label for="inputName" class="col-sm-2 col-form-label">Título</label>
	                                    <div class="col-sm-10">
	                                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" value="<?= set_value('titulo') ?>">
	                                    </div>
	                                </div>   

	                                <div class="form-group row">
	                                    <label for="inputName" class="col-sm-2 col-form-label">Subtítulo</label>
	                                    <div class="col-sm-10">
	                                        <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtítulo" value="<?= set_value('subtitulo') ?>">
	                                    </div>
	                                </div>

									<div class="form-group row">
	                                    <label for="inputExperience" class="col-sm-2 col-form-label">Descripción</label>
	                                    <div class="col-sm-10">
	                                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción"><?= set_value('descripcion') ?></textarea>
	                                    </div>
	                                </div>

	                                <div class="form-group row">
	                                    <label for="inputExperience" class="col-sm-2 col-form-label">Comodidades</label>
	                                    <div class="col-sm-10">
	                                        <textarea class="form-control" id="comodidades" name="comodidades" placeholder="Comodidades"><?= set_value('comodidades') ?></textarea>
	                                    </div>
	                                </div>

									<div class="form-group row">
	                                    <label for="inputName" class="col-sm-2 col-form-label">Área</label>
	                                    <div class="col-sm-10">
	                                        <input type="text" class="form-control" id="area" name="area" placeholder="Área" value="<?= set_value('area') ?>">
	                                    </div>
	                                </div>

									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Dormitorios</label>
										<div class="col-sm-10">
											<select id="dormitorios" name="dormitorios" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Baños</label>
										<div class="col-sm-10">
											<select id="banos" name="banos" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Garages</label>
										<div class="col-sm-10">
											<select id="garage" name="garage" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Precio</label>
										<div class="col-sm-3">
											<select id="preciotipo_id" name="preciotipo_id" class="form-control">
												<?php foreach ($preciotipo as $item): ?>
													<option value="<?=$item['id'] ?>"><?=$item['nombre'] ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="precio" name="precio" placeholder="######" value="<?= set_value('precio') ?>">
										</div>
									</div>

								</div>
								<!-- /.card-body -->
								<div class="card-footer clearfix">
									<button type="submit" class="btn btn-danger float-right" id="guardar">Guardar</button>
								</div>

							</form>

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
	<!-- AdminLTE for demo purposes -->
	<script src="<?=base_url('assets/admin/dist/js/demo.js');?>"></script>

	<?php //include "parciales/SCRIPTParcial.php"; ?>


    <script type="text/javascript">
		
		function capitalizarPalabras( val ) {
			return val.toLowerCase()
		            .trim()
		            .split(' ')
		            .map( v => v[0].toUpperCase() + v.substr(1) )
		            .join(' ');  
		}

        $(document).ready(function(){

            $("#padron").click(function(){
	            
	            if($('#dni').val().length > 5){
	            	var v_url = "<?=base_url('padron/');?>/"+$("#dni").val();
	                $.ajax({
	                    type: "GET",
	                    url: v_url,
	                    data: "info=true",
	                    dataType : 'json',
	                    beforeSend: function() {
	                        //$.mobile.loading("show");  // Esto mostrará ajax spinner
	                    },
	                    complete: function() {
	                        //$.mobile.loading("hide"); // Esto ocultará ajax spinner
	                    },
	                    success: function (result) {
	                        if(result.apynom) {
	                            $("#nombre").val( capitalizarPalabras(result.apynom) );
	                            $("#fechanac").val( "01/01/"+result.clase );
	                            $("#sexo").val( result.sexo );
	                            $("#municipios_id").val( result.municipios_id );
	                            $("#direccion").val( capitalizarPalabras(result.direccion) );
	                        } else {
	                            alert('No hay datos para el DNI ingresado!');
	                        }
	                    },
	                    error: function (request,error) {
	                        // Esta función de devolución de llamada se activará en una acción fallida              
	                        alert('Se produjo un error de red, por favor intente nuevamente!');
	                    }
	                });

	            } else {
	                alert('Por favor complete el campo DNI');
	            } 

            });
        });
    </script>

</body>
</html>

