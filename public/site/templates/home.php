<?php
  include('./_head.php');
	include('./_nav.php');
?>
	<main class="j-workspace">
		<section class="mainHome">
			<div class="hero"<?php if(!$page->video){ ?> style="background-image: url(<?php if($page->fondo) echo $page->fondo->url; ?>);"<?php } ?>>
				<video poster="<?php if ($page->fondo) echo $page->fondo->url;?>" id="bgvid" playsinline autoplay muted loop>
					<!-- <source src="./assets/videos/video-home.webm" type="video/webm"> -->
					<source src="<?php if ($page->video) echo $page->video->url;?>" type="video/mp4">
				</video>
				<div class="video-text-wrap">
					<div class="video-text-block">
						<h1><?= $page->titleLa ?><sup>®</sup></h1>
						<p><?= $page->desc ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="productos-wrap" id="productos">
			<div class="j-wrap">
				<h1><?=$page->title1;?></h1>
				<?=$page->subtitle;?>
				<!--  Media element para variaciones de producto-->
				<?php $productos=$pages->get(1029);
					foreach ($productos->children() as $key => $producto) {
						if(($key+1)%3==1){ ?>
					<div class="media-container">
				<?php } ?>
					<div class="media-element center">
						<div class="image-container">
							<a href="<?=$producto->url?>"><img src="<?=$producto->logo->url?>" alt="<?= $producto->title ?>" width="250" style="height:250px;"></a>
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
		        <p>
              <?= __("Tenemos presencia en más de")?>
              <span class="bigFontData"><?=__("20 países");?></span>
              <?=__("con reconocimiento internacional y un equipo de más de");?>
            </p>
            <p>
              <span class="bigFontData"><?=__("1,000");?></span>
              <?=__("colaboradores.");?>
            </p>
		      </div>
		      <div class="hero-image">
		      	<img src="<?= $config->urls->templates ?>assets/images/mapa.svg" alt="">
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
			</div>
		</section>
	</main>
<?php include('./_foot.php'); ?>
