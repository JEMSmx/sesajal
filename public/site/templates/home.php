<?php include('./_head.php');
	  
	  include('./_nav.php'); ?>
	<main class="j-workspace">
		<section class="mainHome" style="">
			<div class="hero">
				<video poster="<?= $config->urls->templates ?>assets/images/bg-video-img.png" id="bgvid" playsinline autoplay muted loop>
					<!-- <source src="./assets/videos/video-home.webm" type="video/webm"> -->
					<source src="<?= $config->urls->templates ?>assets/videos/video-home.mp4" type="video/mp4">
				</video>
				<div class="video-text-wrap">
					<div class="video-text-block">
						<h1>SEMBRAMOS IDEAS,
						COSECHAMOS CONFIANZA®</h1>
						<p class="">Ofrecemos al mercado nacional e internacional productos derivados de semillas oleaginosas de la más alta calidad, elaborados con materias primas cultivadas en México.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="productos-wrap" style="">
			<div class="j-wrap">
				<h1>PRODUCTOS</h1>
				<p>Contamos con una amplia variedad de productos para ofrecer soluciones integrales a cada necesidad.</p>
				<!--  Media element para variaciones de producto-->
				<div class="media-container">
					<!-- Media Element -->
					<div class="media-element center">
						<div class="image-container">
							<img src="<?= $config->urls->templates ?>assets/images/producto-item-1-1.jpg" alt="[#TODO]">
						</div>
						<div class="text-container">
							<h3>Aceites Vegetales e Ingredientes</h3>
						</div>
					</div>
					<!-- Media Element -->
					<div class="media-element center">
						<div class="image-container">
							<img src="<?= $config->urls->templates ?>assets/images/producto-item-2-2.jpg" alt="[#TODO]">
						</div>
						<div class="text-container">
							<h3>Semillas y Granos</h3>
						</div>
					</div>
					<!-- Media Element -->
					<div class="media-element center">
						<div class="image-container">
							<img src="<?= $config->urls->templates ?>assets/images/producto-item-3-3.jpg" alt="[#TODO]">
						</div>
						<div class="text-container">
							<h3>Alimento para mascotas</h3>
						</div>
					</div>
					
				</div>

				
			</div>
		</section>

		<section class="half-split-block" style="">
		    <div class="hero">
		      <div class="hero-text">
		        <p>Tenemos presencia en más de <span class="bigFontData">20 países</span> con reconocimiento internacional y un equipo de más de <span class="bigFontData">1,000</span> colaboradores.
		      </div>
		      <div class="hero-image">
		      	<img src="<?= $config->urls->templates ?>assets/images/mapa.png" alt="">
		      </div>
		    </div>
		</section>

		<section class="ventajas-wrap">
			<div class="j-wrap">
				<h1>VENTAJAS COMPETITIVAS</h1>
				<div class="media-container">
					<!-- Media Element -->
					<div class="media-element">
						<div class="image-container">
							<img src="<?= $config->urls->templates ?>assets/images/icon-hands-sesajal-01.svg" alt="[#TODO]">
						</div>
						<div class="text-container">
							<h3>FLEXIBILIDAD</h3>
							<p>Para elaborar productos a la medida de nuestros clientes.</p>
						</div>
					</div>
					<!-- Media Element -->
					<div class="media-element">
						<div class="image-container">
							<img src="<?= $config->urls->templates ?>assets/images/icon-truck-sesajal-01.svg" alt="[#TODO]">
						</div>
						<div class="text-container">
							<h3>GARANTÍA DE ABASTECIMIENTO</h3>
							<p>Contamos con estructuras de proveeduría que garantizan la buena distribución de nuestros clientes.</p>
						</div>
					</div>
				</div>
				<div class="media-container">
					<!-- Media Element -->
					<div class="media-element">
						<div class="image-container">
							<img src="<?= $config->urls->templates ?>assets/images/icon-reward-sesajal-01.svg" alt="[#TODO]">
						</div>
						<div class="text-container">
							<h3>CONFIABILIDAD</h3>
							<p>Entrega de productos con los más altos estandares de calidad desde 28 años.</p>
						</div>
					</div>
					<!-- Media Element -->
					<div class="media-element">
						<div class="image-container">
							<img src="<?= $config->urls->templates ?>assets/images/icon-efficiency-sesajal-01.svg" alt="[#TODO]">
						</div>
						<div class="text-container">
							<h3>MÁXIMA EFICIENCIA</h3>
							<p>Eliminamos intermediarios para procesar productos directamente del campo y llevarlos hasta su puerta.</p>
						</div>
					</div>
				</div>
				<!-- <div class="grid">
					<div class="unit half">
						<div class="p-img-left">
							<img src="./assets/images/icon-hands-sesajal-01.svg" alt="[#TODO]">
							<div class="ventajas-wrap">
								<h2>FLEXIBILIDAD</h2>
								<p>Para elaborar productos a la medida de nuestros clientes.</p>
							</div>
						</div>
					</div>
					<div class="unit half">
						<div class="p-img-left">
							<img src="./assets/images/icon-truck-sesajal-01.svg" alt="[#TODO]">
							<div class="ventajas-wrap">
								<h2>GARANTÍA DE ABASTECIMIENTO</h2>
								<p>Contamos con estructuras de proveeduría que garantizan la buena distribución de nuestros clientes.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="grid">
					<div class="unit half">
						<div class="p-img-left">
							<img src="./assets/images/icon-reward-sesajal-01.svg" alt="[#TODO]">
							<div class="ventajasWrap">
								<h2>CONFIABILIDAD</h2>
								<p>Entrega de productos con los más altos estandares de calidad desde 28 años.</p>
							</div>
						</div>
					</div>
					<div class="unit half">
						<div class="p-img-left">
							<img src="./assets/images/icon-efficiency-sesajal-01.svg" alt="[#TODO]">
							<div class="ventajasWrap">
								<h2>MÁXIMA EFICIENCIA</h2>
								<p>Eliminamos intermediarios para procesar productos directamente del campo y llevarlos hasta su puerta.</p>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</section>
	</main>
<?php include('./_foot.php'); ?>