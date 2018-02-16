<?php include('./_head.php'); 

	include('./_nav.php'); ?>

	<main class="j-workspace aviso-privacidad-workspace">
		<section class="intro-section" style="">
		    <div class="hero" style="background-image: url('<?php if($page->fondo) echo $page->fondo->url; ?>');">
		      <div class="hero-text">
		        <h1><?=$page->title;?></h1>
		      </div>
		    </div>
		</section>
		
		

		<section class="" style="">
			<div class="j-wrap" style="">
				<div class="text-container">
					<?=$page->body;?>
				</div>
			</div>
		</section>
		
	</main>

<?php include('./_foot.php'); ?>
