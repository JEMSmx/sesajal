<?php include('./_head.php');
	  
	  include('./_nav.php'); ?>

	<main class="j-workspace nosotros-workspace">
		<section class="intro-section" style="">
		    <div class="hero">

		      <div class="hero-text">
		        <h1><?=$page->titleLa?></h1>
		        <p><?=$page->desc?></p>
		        <!-- <div class="horizontal-btn-group ">
		          <button class="bg-link" type="button" name="button">Conócenos</button>
		          <button class="btn-doctors ripple" type="button" name="button">Solicita apoyo</button>
		        </div> -->
		      </div>
		    </div>
		</section>

		<section class="nosotros-wrap" style="">
			<div class="j-wrap">
				<h1><?=$page->title1?></h1>
				<div class="media-container">
					<!-- Media Element -->
				<?php foreach ($page->valores as $key => $valor) { ?>
					<div class="media-element">
						<div class="image-container">
							<img src="<?= $valor->img->url ?>" alt="<?=$valor->title1?>">
						</div>
						<div class="text-container">
							<h3><?=$valor->title1?></h3>
						</div>
					</div>
				<?php } ?>
				</div>
				
			</div>
		</section>

		
		<section class="certificaciones-wrap">
			<div class="j-wrap">
				<h1><?=$page->title2?></h1>
				<?php foreach ($page->certificaciones as $key => $certificacion) { 
					if(($key+1)%5==1){ ?>
					<div class="media-container">
				<?php } ?>
					<div class="media-element">
						<img src="<?=$certificacion->img->url;?>" alt="<?=$certificacion->img->description;?>">
					</div>
					<?php if(($key+1)%5==0){ ?>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
		</section>
		<section class="resp-social-wrap" style="">
			<div class="hero">
				<h1><?=$page->title3?></h1>
					<div class="hero-container">
						<div class="text-container">
							<div class="image-container"></div>
							<ul>
							<?php foreach ($page->repeat1 as $key => $value) { ?>
								<li>
									<p><?=$value->desc?></p>
								</li>
							<?php } ?>
							</ul>
						</div>
					</div>
				</div>
		</section>
	</main>

<?php include('./_foot.php');?>