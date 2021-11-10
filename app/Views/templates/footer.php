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

            $(document).on("click","#enviar", function(event) {
					
	            $.ajax({
	                type: "POST",
	                url: "index.php?ctrl=Inicio&accion=Contacto",
	                data: "nombre="+$("#cnombre").val()+"&email="+$("#cemail").val()+"&message="+$("#cmessage").val(),
	                dataType : 'json',                     
	                success: function(data) {
	                	$("#myModalEnviar").modal("show");
	                }
	            });					
				
            	return false;
            });

        });

    </script>

</body>

</html>