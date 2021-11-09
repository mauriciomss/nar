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
    <title><?=$title;?></title>

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
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=".">Tech Admin</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Ingrese sus datos para iniciar tu sesión.</p>

				<?php if(session()->getFlashdata('msg')):?>
					<div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
				<?php endif;?>

                <form action="<?=base_url('auth');?>" method="post">

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" id="email" value="<?=set_value('email');?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" id="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                <span class="fas fa-eye verpass" id="verpass" style="display: none;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" id="login_userbttn" class="btn btn-primary btn-block">Iniciar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?=base_url('assets/admin/plugins/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url('assets/admin/dist/js/adminlte.js');?>"></script>


    <script type="text/javascript">
        $(document).ready(function(){
            //var timeSlide = 1000;
            //$('#timer').css('display','none');

            $(document).on("click","#verpass", function(event) {
                if ( $('#password').attr('type') == 'password' ) {
                    $('#password').attr('type', 'text'); 
                    $( "#verpass" ).removeClass( "glyphicon-eye-open" ).addClass( "glyphicon-eye-close" );
                } else {
                    $('#password').attr('type', 'password'); 
                    $( "#verpass" ).removeClass( "glyphicon-eye-close" ).addClass( "glyphicon-eye-open" );
                }
            });            
        });        
    </script>

    <style type="text/css">

    </style>

</body>
</html>


<?php /* ?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?=base_url('assets/custom/images/favicon.png');?>">
		<!-- Bootstrap CSS -->
		<link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?=base_url('assets/vendor/bootstrap/css/animate.css');?>" rel="stylesheet">
		<link href="<?=base_url('assets/vendor/bootstrap/css/animation.css');?>" rel="stylesheet">
		<title><?=$title;?></title>
	</head>
	<body>
		<?php
		include('common/navbar.php');
		?>
		<div class="container mt-5">
			<div class="row justify-content-md-center">
				<div class="col-6 mt-5">
					<div class="card rounded p-2">
						<h1>Inicio de Sesión</h1>
						<?php if(session()->getFlashdata('msg')):?>
							<div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
						<?php endif;?>
						<form action="<?=base_url('auth');?>" method="post">
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" name="email" class="form-control" id="email" value="<?=set_value('email');?>">
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Contraseña</label>
								<input type="password" name="password" class="form-control" id="password">
							</div>
							<button type="submit" class="btn btn-primary float-end">
								Iniciar
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	 
		<!-- Popper.js first, then Bootstrap JS -->
		<script>
			window.jQuery || document.write('<script src="<?=base_url('assets/vendor/jquery/jquery-3.5.1.min.js');?>"><\/script>')
		</script>
		<script src="<?=base_url('assets/vendor/bootstrap/js/popper.min.js');?>"></script>
		<script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
	</body>
</html>
<?php */ ?>