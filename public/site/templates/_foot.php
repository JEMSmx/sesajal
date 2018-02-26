<footer class="j-workspace">
	<div class="j-wrap">
		<div class="footer-block-container">
			<!-- Block Element -->
			<div class="footer-block-element center">
				<div class="image-container">
					<img src="<?= $config->urls->templates ?>assets/images/sesajal-color-logo.svg" alt="">
				</div>
				<div class="text-container">
					<h3><?= __("SEMBRAMOS IDEAS,
						COSECHAMOS CONFIANZA®"); ?></h3>
				</div>
			</div>
			<!-- Block Element -->
			<div class="footer-block-element">

				<h3><?=__("LINKS");?></h3>

				<div class="text-container">
					<div class="footerWidget">
						<ul class="">
							<li>
								<a href="/"><?=__("INICIO");?></a>
							</li>
							<li>
								<a href="/nosotros"><?=__("NOSOTROS");?></a>
							</li>
							<li>
								<a href=""><?=__("PRODUCTOS");?></a>
							</li>
							<li>
								<a href="/bolsa-de-trabajo"><?=__("BOLSA DE TRABAJO");?></a>
							</li>
						</ul>
					</div>
					<div class="footerWidget">
						<ul class="">
							<li>
								<a href="/contacto"><?=__("CONTACTO");?></a>
							</li>
							<li>
								<a href="/sanitizacion"><?=__("SANITIZACIÓN");?></a>
							</li>
							<li>
								<a href="/aviso-de-privacidad"><?=__("AVISO DE PRIVACIDAD");?></a>
							</li>
							<li>
								<a href="/terminos-y-condiciones"><?=__("TERMINOS Y CONDICIONES DE VENTA");?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Block Element -->
			<div class="footer-block-element">
				<!-- Tittle-->
				<h3><?=__("CONTACTO");?></h3>

				<div class="text-container">
					<div class="footerWidget contactInfo">
						<!-- Sesajal Dirección -->
						<?=$pages->get(1)->subtitle1?>
						<!-- Teléfono -->
						<p>
							Teléfono:
							<?=$pages->get(1)->title3?>
							<?=$pages->get(1)->title4;?>
						</p>
						<!-- Redes sociales -->
						<p>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" style="margin-right: 1">
								<g>
									<path d="M256,0.994c141.385,0,256,114.615,256,256c0,130.547-97.719,238.265-224,254.013V320.994h88l8-64h-96v-32   c0-17.673,14.326-32,32-32h64v-64h-64c-53.02,0-96,42.98-96,96v32h-48v64h48v126.5v57.435v6.078   C97.719,495.258,0,387.541,0,256.994C0,115.609,114.615,0.994,256,0.994z" fill="#595959"/>
								</g>
							</svg> <?=__("sesajalmx");?>
						</p>
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