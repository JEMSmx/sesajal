<?php include('./_head.php');
	  
	  include('./_nav.php'); ?>

	<main class="j-workspace contacto-workspace">
		<section class="intro-section">
		    <div class="hero" style="background-image: url('<?php if($page->fondo) echo $page->fondo->url; ?>');">
		      <div class="hero-text">
		        <!-- <h1>
		          ¡Apoyamos el <strong>poder</strong>
		          <span><strong>Transformador</strong></span>
		          <br>
		          de las <strong>mujeres!</strong>
		        </h1>
		        <div class="horizontal-btn-group ">
		          <button class="bg-link" type="button" name="button">Conócenos</button>
		          <button class="btn-doctors ripple" type="button" name="button">Solicita apoyo</button>
		        </div> -->
		      </div>
		    </div>
		</section>
		
		

		<section class="" style="">
			<div class="j-wrap" style="">
				<h1><?=__("CONTÁCTANOS");?></h1>
				
				<div class="grid">
					
						
						<form>
				            <fieldset>
				                
				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text"><?=__("Nombre");?>*:</label>
				                	<input id="text" type="text" placeholder="">
				                </div>
				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text"><?=__("Compañia");?>*:</label>
				                	<input id="text" type="text" placeholder="">
				                </div>
				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text"><?=__("País");?>*:</label>
				                	<input id="text" type="text" placeholder="">
				                </div>
				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text"><?=__("Estado");?>*:</label>
				                	<input id="text" type="text" placeholder="">
				                </div>
				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text"><?=__("E-mail");?>*:</label>
				                	<input id="text" type="text" placeholder="">
				                </div>
				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text"><?=__("Tema");?>:</label>
				                	<input id="text" type="text" placeholder="">
				                </div>

                				<div class="unit">
                					<textarea cols="30" rows="5" placeholder=""></textarea>
                				</div>

				            </fieldset>
				            <div class="grid">
				            	<div class="unit">
				            		<!-- <h1><?=__("CAPTCHA");?></h1> -->
				            		<div class="g-recaptcha" data-sitekey="6LeXd0gUAAAAAMfLPnSpNdgAAgqw5qJqLi4a1ZKM"></div>
				            	</div>
				            	<div class="unit">
				            		<button>Enviar</button>
				            	</div>
				            </div>
				        </form>
					
				</div>
				
			</div>
		</section>
		
	</main>

<?php include('./_foot.php'); ?>