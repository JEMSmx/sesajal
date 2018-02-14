<?php include('./_head.php'); 

	include('./_nav.php'); ?>

	<main class="j-workspace bolsa-trabajo-workspace">
		<section class="intro-section" style="">
		    <div class="hero">
		      <div class="hero-text">
		        
		      </div>
		    </div>
		</section>

		<section class="section-after-hero" style="">
			<div class="j-wrap" style="">
				<div class="text-container">
					<h1><?=$page->titleLa?></h1>
					<h3><?=$page->desc?></h3>
					<p><?=__("SISTEMA EVALUATEST® RH");?></p>
				</div>
				<div class="grid">
					<div class="unit" style="">
						<div class="simple-block">
							<p><?=__("¿Eres nuevo?");?></p>
						</div>
						<div class="simple-block">
							<p><?=__("Al registrarte podrás comenzar tus evaluaciones.");?></p>
						</div>
						<div class="simple-block">
							<a href="registro"><button><?=__("Regístrate");?></button></a>
						</div>
					</div>
					<div class="unit" style="">
						<div class="simple-block">
							<p><?=__("¿Ya estás registrado en Evaluest?");?></p>
						</div>
						<form>
				            <fieldset>
				                
				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text"><?=__("Usuario");?>:</label>
				                	<input id="text" type="text" placeholder="placeholder">
				                </div>
				                
				                
				                <div class="unit">
				                	<!-- Password -->
				                	<label><?=__("Contraseña");?>:</label>
				                	<input type="password" value="password">
				                </div>
				               
				                
				            </fieldset>
				        </form>
				        <div class="simple-block">
				        	<button><?=__("Ingresar");?></button>
				        	 <p><?=__("Si olvidaste tu contraseña, haz clic");?> <a href=""><?=__("aqui");?></a></p>
				        </div>
					</div>
				</div>
				<div class="grid">
					<a href="contenido"><button><?=__("BOLSA DE TRABAJO");?></button></a>
				</div>
				
			</div>
		</section>
		
	</main>
<?php include('./_foot.php'); ?>