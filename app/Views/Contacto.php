<?php include_once (dirname( __FILE__ )."/templates/header.php"); ?>
<main id="main">

        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Contactanos</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?=base_url();?>">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Contacto
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Contact Single ======= -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="<?=base_url('contact');?>" method="post" role="form" class="php-email-form" id="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control form-control-lg form-control-a" placeholder="Nombre" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control form-control-lg form-control-a" placeholder="Email" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="subject" id="subject" class="form-control form-control-lg form-control-a" placeholder="Asunto" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" id="message" class="form-control" name="message" cols="45" rows="8" placeholder="Mensaje" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-3">
                                            <div class="mb-3">
                                                <div class="loading">Enviando...</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Tu mensaje fue enviado, Gracias!</div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <button type="submit" id="sendcontact" class="btn btn-a">Enviar mensaje</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 section-md-t3">
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-envelope"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Dinos ¡Hola!</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">Email.
                                                <span class="color-a"> info@nardesarrollos.com.ar</span>
                                            </p>
                                            <p class="mb-1">Tel.
                                                <span class="color-a">+54 11 3422-9399</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-geo-alt"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Buscanos en</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">
                                                Benavidez, BS.AS.,
                                                <br> Argentina.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-share"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Redes sociales</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <div class="socials-footer">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="https://facebook.com/Desarrollos.inmobiliarios.N.A.R/" class="link-one">
                                                            <i class="bi bi-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="https://www.instagram.com/nar.desarrollos/" class="link-one">
                                                            <i class="bi bi-instagram" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 section-t8">
                        <div class="contact-map box">
                        <div id="map" class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52668.88792517117!2d-58.747557267227606!3d-34.40628941760035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca19b02356b39%3A0xce459fa6c72e54ab!2sBenavidez%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1625744752465!5m2!1ses-419!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Contact Single-->

    </main><!-- End #main -->
    
<?php include_once (dirname( __FILE__ )."/templates/footer.php"); ?>