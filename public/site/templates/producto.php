<?php include('./_head.php');
	  
	  include('./_nav.php'); ?>
	<main class="j-workspace producto-agroindustria-workspace">
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

		<section class="section-after-hero" style="">
			<div class="j-wrap" style="">
				<div class="media-container">
					<!-- Media Element -->
					<div class="media-element">
						<div class="image-container">
							<img src="<?= $config->urls->templates ?>assets/images/icon-success-sesajal-01.svg" alt="[#TODO]">
						</div>
						<div class="text-container">
							<h3>Ideal para:</h3>
							<ul>
							<?php foreach ($page->ideal as $key => $value) { ?>
								<li>
									<p><?=$value->title1?></p>
								</li>
							<?php } ?>
							</ul>
						</div>
					</div>
					<!-- Media Element -->
					<div class="media-element">
						<div class="image-container">
							<img src="<?= $config->urls->templates ?>assets/images/icon-star.svg" alt="[#TODO]">
						</div>
						<div class="text-container">
							<h3>Propiedades:</h3>
							<ul>
								<?php foreach ($page->propiedades as $key => $value) { ?>
								<li>
									<p><?=$value->title1?></p>
								</li>
							<?php } ?>
							</ul>
						</div>
					</div>

						<?php foreach ($page->extraOption as $key => $value) { ?>
							<div class="media-element">
								<div class="image-container">
									<img src="<?= $config->urls->templates ?>assets/images/icon-star-sesajal-01.svg" alt="[#TODO]">
								</div>
								<div class="text-container">
									<h3>Propiedades:</h3>
									<ul>
										<?php foreach ($value->ideal as $key => $val) { ?>
										<li>
											<p><?=$val->title1?></p>
										</li>
									<?php } ?>
									</ul>
								</div>
							</div>
						<?php } ?>
				</div>
	

				<div class="media-container">
					
					<!-- Media Element -->
				<?php foreach ($page->valores as $key => $value) { ?>
					<div class="media-element center">
						<div class="image-container">
							<img src="<?=$value->img->url?>" alt="<?=$value->title1?>" width="80" height="80">
						</div>
						<div class="text-container">
							<h3><?=$value->title1?></h3>
						</div>
					</div>
				 <?php } ?>
				</div>
				


				<div class="media-product-presentations" >
					<h4>Presentaciones:</h4>
					<p><?=$page->subtitle?></p>
					<?php foreach ($page->certificaciones as $key => $value) { ?>
						<img src="<?=$value->img->url?>" alt="<?=$value->img->description?>" width="48" heigth="48">
					<?php } ?>
				</div>
			</div>
		</section>
		
	</main>
<?php include('./_foot.php'); ?>