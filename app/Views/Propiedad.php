<?php include_once (dirname( __FILE__ )."/templates/header.php"); ?>

    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?=$propiedad->titulo ?></h1>
                        <span class="color-text-a"><?=$propiedad->subtitulo ?></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url();?>">Inicio</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?=base_url();?>/propiedades">Propiedades</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?=$propiedad->titulo ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class="property-single nav-arrow-b">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div id="property-single-carousel" class="swiper">
                        <div class="swiper-wrapper">
                        <?php foreach ($imagenes as $item): ?> 
                            <div class="carousel-item-b swiper-slide">
                                <img src="<?=base_url('imagenes').'/'.$item['file'];?>" alt="" style="width: 100%" >
                            </div>
                            <?php endforeach ?> 
                        </div>
                    </div>
                    <div class="property-single-carousel-pagination carousel-pagination"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="ion-money"><?=$propiedad->signo ?></span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c"><?=$Gral->formatPrecio($propiedad->precio) ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d">Resumen</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>ID de propiedad:</strong>
                                            <span>#<?=$propiedad->id ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Ubicación:</strong>
                                            <span><?=$propiedad->ciudad ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Tipo de propiedad:</strong>
                                            <span><?=$propiedad->tipopropiedad ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Estado:</strong>
                                            <span><?=$propiedad->estado ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Área:</strong>
                                            <span><?=$propiedad->area ?>m<sup>2</sup></span>
                                        </li>                                        
                                        <li class="d-flex justify-content-between">
                                            <strong>Dormitorios:</strong>
                                            <span><?=$propiedad->dormitorios ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Baños:</strong>
                                            <span><?=$propiedad->banos ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Garaje:</strong>
                                            <span><?=$propiedad->garage ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Descripción:</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a"><?=nl2br($propiedad->descripcion) ?></p>
                            </div>
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Comodidades</h3>
                                        <p><?=nl2br($propiedad->comodidades) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Property Single End /-->


<?php include_once (dirname( __FILE__ )."/templates/footer.php"); ?>