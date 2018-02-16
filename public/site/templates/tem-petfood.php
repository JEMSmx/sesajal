<?php include('./_head.php');
	  
	  include('./_nav.php'); ?>

	  <main class="j-workspace petfood-workspace">
	  	<section class="intro-section" style="">
	  		<div class="hero" style="background-image: url('<?php if($page->fondo) echo $page->fondo->url; ?>');">
	  			<div class="hero-text">
	  				<h1><?=$page->titleLa?></h1>
	  				<?=$page->desc?>
		        <!-- <div class="horizontal-btn-group ">
		          <button class="bg-link" type="button" name="button">Conócenos</button>
		          <button class="btn-doctors ripple" type="button" name="button">Solicita apoyo</button>
		      </div> -->
		  </div>
		</div>
	</section>

	<section class="description-after-hero" style="">
		<div class="j-wrap">
			<div class="image-text-wrap">
				<div class="image-text-block">
					<img src="<?=$page->img->url?>?>" alt="[#TODO]">
					<div class="text-colum">
						<?=$page->subtitle?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="" style="">
		<div class="j-wrap" style="">
			<div class="grid">
				<h1><?=$page->title1?></h1>
			</div>

			<div class="media-container">
				<!-- Media Element -->
			<?php foreach ($page->variante as $key => $value) { ?>
				<div class="media-element center">
					<div class="image-container">
						<img src="<?=$value->img->url?>" alt="<?=$value->img->description?>" width="300" height="300">
						<img src="<?=$value->logo->url?>" alt="<?=$value->logo->description?>" width="200" height="100">
					</div>

				</div>
			<?php } ?>
				
			</div>
		</div>
	</section>

</main>
<?php include('./_foot.php'); ?>