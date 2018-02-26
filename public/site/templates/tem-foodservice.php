<?php include('./_head.php');
	  
	  include('./_nav.php'); ?>

	  <main class="j-workspace producto-foodservice-carousel-workspace">
		<section class="intro-section" style="">
		    <div class="hero" style="background-image: url('<?php if($page->fondo) echo $page->fondo->url; ?>');">
		      <div class="hero-text">
		      	<div class="image-container">
		      		<img src="<?=$page->logo->url?>" alt="<?=$page->title?>">
		      	</div>
		        <!-- <h1>¡Apoyamos el <strong>poder!</strong></h1>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero distinctio tempora dolor natus doloremque facere voluptatibus nulla. Quaerat delectus unde, repellendus et consequuntur, pariatur iste nemo eveniet natus, fugit alias!</p> -->
		        <!-- <div class="horizontal-btn-group ">
		          <button class="bg-link" type="button" name="button">Conócenos</button>
		          <button class="btn-doctors ripple" type="button" name="button">Solicita apoyo</button>
		        </div> -->
		      </div>
		    </div>
		</section>
		
		

		<section class="section-after-hero" style="">
			<div class="j-wrap" style="">
				<div class="image-text-wrap">
					<div class="image-text-block">
						<img src="<?=$page->img->url?>">
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
				<!--  Media element para variaciones de producto-->
				<div class="media-container">
					<div class="owl-carousel">
					<?php foreach ($page->children() as $key => $value) { 
					   $var=$value->valores->first();
					   if($var)
					  	 $img = $var->img->->height(120, array('quality' => 90, 'upscaling' => true, 'cropping' => false));
					    ?>
					   <div class="item">
							<a href="<?=$value->url?>"><img src="<?php if($img) echo $img->url ?>"></a>
						</div>
					<?php } ?>
					</div>
				</div>
				
			</div>
		</section>
		
	</main>
<?php include('./_foot.php'); ?>