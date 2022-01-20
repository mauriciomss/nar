<!DOCTYPE html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="wide wow-animation" lang="es-AR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>

    <meta charset="utf-8">

    <!-- METAS SEO  -->
    <link rel="canonical" href="<?=current_url();?>" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="NAR desarrollos inmobiliarios" />
    <meta property="og:description" content="Empresa constructora" />
    <meta property="og:url" content="<?=current_url();?>" />
    <meta property="og:site_name" content="NAR desarrollos inmobiliarios" />
    <meta property="article:tag" content="web" />
    <meta property="article:section" content="Arriba" />
    <meta property="article:published_time" content="2019-06-25T10:14:26-03:00" />
    <meta property="article:modified_time" content="2019-06-25T10:15:57-03:00" />
    <meta property="og:updated_time" content="2019-06-25T10:15:57-03:00" />
    <meta property="og:image" content="<?=base_url('assets/sitio/img/favicon2.png');?>" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Empresa constructora" />
    <meta name="twitter:title" content="NAR desarrollos inmobiliarios" />
    <meta name="twitter:image" content="<?=base_url('assets/sitio/img/favicon2.png');?>" />
    <!-- / METAS SEO -->    

    <title><?=$title;?> - NAR desarrollos inmobiliarios</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="<?=base_url('assets/sitio/img/favicon2.png');?>" />

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#2eca6a">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#2eca6a">

    <!-- Vendor CSS Files -->
    <link href="<?=base_url('assets/sitio/vendor/animate.css/animate.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/sitio/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/sitio/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/sitio/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">


    <!-- Libraries CSS Files -->
    <link href="<?=base_url('assets/sitio/lib/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/sitio/lib/animate/animate.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/sitio/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/sitio/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=base_url('assets/sitio/css/style.css');?>" rel="stylesheet">

</head>

<body>

    <!-- ======= Property Search Section ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Buscar propiedades</h3>
        </div>
        <span class="close-box-collapse right-boxed bi bi-x"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a" method="GET" action="<?=base_url();?>/propiedades/buscar/q">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label class="pb-2" for="Type">Palabra clave</label>
                            <input type="text" name="query" class="form-control form-control-lg form-control-a" placeholder="Palabra">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label for="Type">Tipo</label>
                            <select  name="tipo"class="form-control form-control-lg form-control-a" id="Type">
                                <option value="">Todos los tipos</option>
                                <option value="1">Alquiler</option>
                                <option value="2">Venta</option>
                                <option value="3">Open House</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="city">Ciudad</label>
                            <select name="ciudad"class="form-control form-select form-control-a" id="city">
                                <option value="">Todas las ciudades</option>
                                <option value="1">Pilar</option>
                                <option value="2">San Fernando</option>
                                <option value="3">Olivos</option>
                                <option value="4">Capital Federal</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="bedrooms">Dormitorios</label>
                            <select name="dormi" class="form-control form-select form-control-a" id="bedrooms">
                                <option value="">Sin limite</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="garages">Garajes</label>
                            <select name="garages" class="form-control form-select form-control-a" id="garages">
                                <option value="">Sin limite</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="bathrooms">Baños</label>
                            <select name="banos" class="form-control form-select form-control-a" id="bathrooms">
                                <option value="">Sin limite</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="price">Precio máximo</label>
                            <select name="precio" class="form-control form-select form-control-a" id="price">
                                <option value="">Sin limite</option>
                                <option value="50000">$50,000</option>
                                <option value="100000">$100,000</option>
                                <option value="150000">$150,000</option>
                                <option value="200000">$200,000</option>
                                <option value="500000">$500,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Buscar propiedad</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- End Property Search Section -->



    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="<?=base_url();?>">NAR<span class="color-b"> desarrollos inmobiliarios</span></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="<?=base_url();?>">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="<?=base_url();?>/propiedades">Propiedades</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Construcción</a>
                            <ul>
                                <li><a href="<?=base_url('/servicios/tradicional');?>"><strong>Tradicional</strong></a></li>
                                <li><a href="<?=base_url('/servicios/steel_framing');?>"><strong>Steel Framing</strong></a></li>
                                <li><a href="<?=base_url('/servicios/brimax');?>"><strong>Brimax</strong></a></li>
                            </ul>
                            <a class="dropdown-item" href="<?=base_url('encontruccion');?>">Refacciones y ampliaciones</a>
                            <a class="dropdown-item" href="<?=base_url('encontruccion');?>">Smart Houses</a>
                            <a class="dropdown-item" href="<?=base_url('encontruccion');?>">Piletas</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="<?=base_url('encontruccion');?>">Mi corralón</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="<?=base_url('contacto');?>">Contacto</a>
                    </li>
                </ul>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                <i class="bi bi-search"></i>
            </button>

        </div>
    </nav><!-- End Header/Navbar -->

