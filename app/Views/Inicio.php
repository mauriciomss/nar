<?php include_once (dirname( __FILE__ )."/templates/header.php"); ?>

    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel swiper position-relative">

        <div class="swiper-wrapper">

            <?php foreach ($destacadas as $item): ?>
            <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(<?=base_url('imagenes').'/'.$item['file'];?>)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top"><?=$item['ciudad'] ?></p>
                                        <h1 class="intro-title mb-4 ">
                                            <span class="color-b"><?=$item['subtitulo'] ?></span>
                                            <br> <?=$item['titulo'] ?>
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="<?=base_url();?>/propiedades/<?=$item['slug'] ?>"><span class="price-a"><?=$item['estado'] ?> | <?=$item['signo'] ?> <?=$Gral->formatPrecio($item['precio']) ?></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach?>

        </div>
        <div class="swiper-pagination"></div>
    </div><!-- End Intro Section -->


    <main id="main">

        <!-- ======= Latest Properties Section ======= -->
        <section class="section-property section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Últimas propiedades</h2>
                            </div>
                            <div class="title-link">
                                <a href="<?=base_url();?>/propiedades">todas
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="property-carousel" class="swiper">
                    <div class="swiper-wrapper">


                        <?php foreach ($destacadas as $item): ?>
                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="<?=base_url('imagenes').'/'.$item['file'];?>" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="property-single.html"><?=$item['titulo'] ?>
                                                    <br /><?=$item['subtitulo'] ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a"><?=$item['estado'] ?> | <?=$item['signo'] ?> <?=$Gral->formatPrecio($item['precio']) ?></span>
                                            </div>
                                            <a href="<?=base_url();?>/propiedades/<?=$item['slug'] ?>" class="link-a">ver mas
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Área</h4>
                                                    <span><?=$item['area'] ?>m
                                                        <sup>2</sup>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Hab.</h4>
                                                    <span><?=$item['dormitorios'] ?></span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baños</h4>
                                                    <span><?=$item['banos'] ?></span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garaje</h4>
                                                    <span><?=$item['garage'] ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->
                        <?php endforeach?>

                    </div>
                </div>
                <div class="propery-carousel-pagination carousel-pagination"></div>
            </div>
        </section><!-- End Latest Properties Section -->
                       
    </main><!-- End #main -->
    
<?php include_once (dirname( __FILE__ )."/templates/footer.php"); ?>