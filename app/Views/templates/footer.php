    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav-footer">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="<?=base_url();?>">Inicio</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?=base_url();?>/propiedades">Propiedades</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?=base_url();?>/encontruccion">Mi corralón</a>
                            </li>                            
                            <li class="list-inline-item">
                                <a href="<?=base_url('contacto');?>">Contacto</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://facebook.com/Desarrollos.inmobiliarios.N.A.R/">
                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/nar.desarrollos/">
                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            <span class="color-a">NAR desarrollos inmobiliarios</span>. Todos los derechos reservados.
                        </p>
                    </div>
                    <div class="credits">
                        Desarrollado por <a href="https://mauriciomss.github.io/">mauriciomss</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?=base_url('assets/sitio/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?=base_url('assets/sitio/vendor/php-email-form/validate.js');?>"></script>
    <script src="<?=base_url('assets/sitio/vendor/swiper/swiper-bundle.min.js');?>"></script>

    <!-- JavaScript Libraries -->
    <script src="<?=base_url('assets/sitio/lib/jquery/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/sitio/lib/jquery/jquery-migrate.min.js');?>"></script>
    <script src="<?=base_url('assets/sitio/lib/popper/popper.min.js');?>"></script>
    <script src="<?=base_url('assets/sitio/lib/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('assets/sitio/lib/easing/easing.min.js');?>"></script>
    <script src="<?=base_url('assets/sitio/lib/owlcarousel/owl.carousel.min.js');?>"></script>
    <script src="<?=base_url('assets/sitio/lib/scrollreveal/scrollreveal.min.js');?>"></script>
  
    <!-- Contact Form JavaScript File -->
    <!-- <script src="contactform/contactform.js"></script> -->
    
    <!-- Template Main JS File -->
    <script src="<?=base_url('assets/sitio/js/main.js');?>"></script>


    <script type="text/javascript">

        $(document).ready(function(){






            $(document).on("click","#sendcontact", function(event) {
                event.preventDefault();
                $(".error-message").hide();
                $(".sent-message").hide();

                var name = $("#name").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();
                if(name=='' || email=='' || subject=='' || message=='')
                {
                    $(".error-message").html('Todos los campos son obligatorios');
                    $(".error-message").show();
                }
                else
                {
                    $.ajax({
                        type: "POST",
                        url: '<?=base_url('contact');?>',
                        data: $('#php-email-form').serialize(),
                        dataType : 'json',
                        beforeSend: function() {
                            $(".loading").show();
                        },
                        success: function() {
                            $("#name").val('');
                            $("#email").val('');
                            $("#subject").val('');
                            $("#message").val('');
                                                    
                            $(".loading").hide();
                            $(".sent-message").show();

                            $('#php-email-form')[0].reset();
                        },
                        error: function (request,error) {
                            $(".loading").hide();
                            $(".error-message").html('Se produjo un error de red, por favor intente nuevamente!');
                            $(".error-message").show();
                        }
                    });
                }
    
                return false;
            });

        });

    </script>

</body>

</html>