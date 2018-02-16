<?php include('./_head.php');
	  
	  include('./_nav.php'); ?>

	  <main class="j-workspace">
		<section class="intro-section" style="">
		    <div class="hero">
		      <div class="hero-text">
		        <h1><?= $page->titleLa ?></h1>
		        <?=$page->desc?>
		        <!-- <div class="horizontal-btn-group ">
		          <button class="bg-link" type="button" name="button">Conócenos</button>
		          <button class="btn-doctors ripple" type="button" name="button">Solicita apoyo</button>
		        </div> -->
		      </div>
		    </div>
		</section>
		
		

		<section class="" style="">
			<div class="j-wrap" style="">
				<div class="image-text-wrap">
					<div class="image-text-block">
						<img src="<?=$page->img->url?>?>" alt="[#TODO]">
						<?=$page->subtitle?>
					</div>
				</div>
				<!-- <div class="grid">
					<div class="unit">
						<div class="p-img-left">
					        <img src="./assets/images/icon-success-sesajal-01.svg" alt="[#TODO]">
					        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					     </div>
					</div>
				</div> -->
				<div class="grid">
					<h1>Nuestros Productos</h1>
				</div>
				<div class="media-container">
					<!-- Media Element -->
				<?php foreach ($page->children() as $key => $value) { 
					   $var=$value->valores->first(); ?>
					<div class="media-element center">
						<div class="image-container">
							<img src="<?php if($var) echo $var->img->url ?>" alt="<?=$var->img->url ?>" width="80" heigth="80">
						</div>
						<div class="text-container">
							<h3><?=$value->title?></h3>
						</div>
					</div>
				<?php } ?>
				</div>
				
			</div>
		</section>
		
	</main>
<?php include('./_foot.php'); ?>