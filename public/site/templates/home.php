<?php include('./_head.php');
	  
	  include('./_nav.php'); ?>
	<main class="j-workspace">
		<section class="mainHome">
			<div class="hero">
				<video poster="<?= $config->urls->templates ?>assets/images/bg-video-img.png" id="bgvid" playsinline autoplay muted loop>
					<!-- <source src="./assets/videos/video-home.webm" type="video/webm"> -->
					<source src="<?= $config->urls->templates ?>assets/videos/video-home.mp4" type="video/mp4">
				</video>
				<div class="video-text-wrap">
					<div class="video-text-block">
						<h1><?= $page->titleLa ?>
						</h1>
						<p><?= $page->desc ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="productos-wrap" style="">
			<div class="j-wrap">
				<h1><?=$page->title1;?></h1>
				<p><?=$page->subtitle;?></p>
				<!--  Media element para variaciones de producto-->
				<?php $productos=$pages->find("template=producto"); 
					foreach ($productos as $key => $producto) { 
						if(($key+1)%3==1){ ?>
					<div class="media-container">
				<?php } ?>
					<div class="media-element center">
						<div class="image-container">
							<a href="<?=$producto->url?>"><img src="<?= $producto->img->url ?>" alt="<?= $producto->title ?>"></a>
						</div>
						<div class="text-container">
							<h3><?= $producto->title ?></h3>
						</div>
					</div>
					<?php if(($key+1)%3==0){ ?>
						</div>
					<?php } ?>
				<?php } ?>

				
			</div>
		</section>

		<section class="half-split-block" style="">
		    <div class="hero">
		      <div class="hero-text">
		        <p><?=__("Tenemos presencia en más de");?> <span class="bigFontData"><?=__("20 países");?></span> <?=__("con reconocimiento internacional y un equipo de más de");?> <span class="bigFontData"><?=__("1,000");?></span> <?=__("colaboradores.");?>
		      </div>
		      <div class="hero-image">
		      	<img src="<?= $config->urls->templates ?>assets/images/mapa.png" alt="">
		      </div>
		    </div>
		</section>

		<section class="ventajas-wrap">
			<div class="j-wrap">
				<h1><?=$page->title2?> </h1>
				
					<!-- Media Element -->
				<?php foreach ($page->repeat as $key => $value) { 
					if(($key+1)%2>0){ ?>
					<div class="media-container">
				<?php } ?>
					<div class="media-element">
						<div class="image-container">
							<img src="<?=$value->img->url?>" alt="[#TODO]">
						</div>
						<div class="text-container">
							<h3><?=$value->title2?></h3>
							<p><?=$value->desc?></p>
						</div>
					</div>
					<?php if(($key+1)%2==0){ ?>
						</div>
					<?php } ?>
				<?php } ?>
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