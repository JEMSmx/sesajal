<footer class="j-workspace">
	<div class="j-wrap">
		<div class="footer-block-container">
			<!-- Block Element -->
			<div class="footer-block-element center">
				<div class="image-container">
					<img src="<?= $config->urls->templates ?>assets/images/sesajal-color-logo.svg" alt="">
				</div>
				<div class="text-container">
					<h3>SEMBRAMOS IDEAS,
					COSECHAMOS CONFIANZA®</h3>
				</div>
			</div>
			<!-- Block Element -->
			<div class="footer-block-element">

				<h3>LINKS</h3>

				<div class="text-container">
					<div class="footerWidget">
						<ul class="">
							<li>
								<a href="/inicio">INICIO</a>
							</li>
							<li>
								<a href="/nosotros">NOSOTROS</a>
							</li>
							<li>
								<a href="">PRODUCTOS</a>
							</li>
							<li>
								<a href="/bolsa-de-trabajo">BOLSA DE TRABAJO</a>
							</li>
						</ul>
					</div>
					<div class="footerWidget">
						<ul class="">
							<li>
								<a href="/contacto">CONTACTO</a>
							</li>
							<li>
								<a href="/sanitizacion">SANITIZACIÓN</a>
							</li>
							<li>
								<a href="/aviso-de-privacidad">AVISO DE PRIVACIDAD</a>
							</li>
							<li>
								<a href="/terminos-y-condiciones">TERMINOS Y CONDICIONES DE VENTA</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Block Element -->
			<div class="footer-block-element">

				<h3>CONTACTO</h3>

				<div class="text-container">
					<div class="footerWidget contactInfo">
						<p>SESAJAL S.A. de C.V.
							Calle 22 No. 2332
							Zona Industrial, C.P. 44940
						Guadalajara, Jal. México</p>
						<p>Teléfono: +52 (33)31343470
						sales.support@sesajal.com</p>							
						<i class="fa fa-facebook"></i> sesajalmx
					</div>
				</div>
			</div>
		</div>

	</div>
</footer>

<!-- scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="<?= $config->urls->templates ?>assets/scripts/ripple.js"></script>
<script src="<?= $config->urls->templates ?>assets/scripts/header.js"></script>
<script src="<?= $config->urls->templates ?>assets/scripts/jQuery-FontSpy.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
	$('.owl-carousel').owlCarousel({
		navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		loop:true,
		margin:10,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true

			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:5,
				nav:true,
				loop:false
			}
		}
	})
</script>
</body>
</html>