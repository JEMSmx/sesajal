<?php include('./_head.php'); 

	include('./_nav.php'); ?>
	<main class="j-workspace bolsa-info-workspace">
		

		<section class="" style="">
			<div class="j-wrap" style="">
				<div class="simple-block">
					<h1><?=$page->title?></h1>
					<p><?=$page->titleLa?></p>
				</div>
				
				<div class="simple-block">
					<h3><?=$page->title2?></h3>
					<p><?=$page->subtitle?></p>
				</div>
				<div class="grid">
					<div class="unit">
						<table>
						  <tr>
						    <th><?=__("Puesto");?></th>
						    <th><?=__("Ubicación");?></th> 
						  </tr>
						 <?php foreach ($page->bolsa as $key => $value) { ?>
						  <tr>
						    <td><?=$value->title1?></td>
						    <td><?=$value->title2?></td> 
						  <?php } ?>  
						  </tr>
						</table>
					</div>
				</div>
				
				<div class="simple-block">
					<h3><?=$page->title3?></h3>
					<p><?=$page->subtitle1?></p>
				</div>
				<div class="grid">
					<div class="unit">
						<table>
						  <tr>
						    <th><?=__("Puesto");?></th>
						    <th><?=__("Ubicación");?></th>  
						  </tr>
						  <?php foreach ($page->bolsa1 as $key => $value) { ?>
						  <tr>
						    <td><?=$value->title1?></td>
						    <td><?=$value->title2?></td> 
						  <?php } ?> 
						</table>
					</div>
				</div>
			</div>
		</section>
		
	</main>
<?php include('./_foot.php'); ?>