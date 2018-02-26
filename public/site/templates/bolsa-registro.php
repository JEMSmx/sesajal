<?php include('./_head.php'); 

	include('./_nav.php'); ?>
	<main class="j-workspace bolsa-registro-workspace">
		<section class="" style="">
			<div class="j-wrap" style="">
				<h1><?=$page->title1?></h1>
				<h3 class="number-title"><?=__("DATOS DE LA CUENTA");?></h3>
				<div class="grid">
					<form>
				            <fieldset>
				            	<div class="unit">
				            		<!-- Text input -->
				            		<label for="text"><?=__("Usuario");?>*:</label>
				            		<input id="text" type="text" placeholder="">
				            	</div>
				            	<div class="unit">
				            		<!-- Password -->
				            		<label><?=__("Contraseña");?>*:</label>
				            		<label for="" class="underInput">Contraseña<input type="password" value="password"></label>
				            		<label for="" class="underInput">Confirmar contraseña<input type="password" value="password"></label>
				            	</div>
				            	<div class="unit">
				            		<!-- Email -->
				            		<label><?=__("Correo");?>*:</label>
				            		<label for="" class="underInput"><span><input type="checkbox"> No tengo correo electrónico</span>Correo electrónico<input type="email"></label>
				            		<label for="" class="underInput">Confirmar correo electrónico<input type="email"></label>
				            	</div>
				            </fieldset>
				        </form>
				</div>
				<h3 class="number-title"><?=__("DATOS DEL USUARIO");?></h3>
				<div class="grid">
					<form>
				            <fieldset>
				                
				               
				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text"><?=__("Nombre");?>*:</label>
				                	<label for="" class="underInput">Nombre(s)<input id="text" type="text" placeholder=""></label>
				                </div>

				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text"><?=__("Apellidos");?>*:</label>
				                	<label for="" class="underInput">Primer Apellido<input id="text" type="text" placeholder=""></label>
				                	<label for="" class="underInput">Segundo Apellido<input id="text" type="text" placeholder=""></label>
				                </div>


								<div class="unit">
									<label><?=__("Sexo");?>*:</label>
									<select>
										<option>Selecciona un sexo</option>
										<option>Option 01</option>
										<option>Option 02</option>
									</select>
								</div>

				                <div class="unit">
				                	<label><?=__("Fecha de nacimiento");?>*:</label>
				                	<div class="simple-block">
				                		<select>
				                		  <option><?=__("Día");?></option>
				                		</select>
				                		<select>
				                		  <option><?=__("Mes");?></option>
				                		</select>
				                		<select>
				                		  <option><?=__("Año");?></option>
				                		</select>
				                	</div>
				                </div>

				                <div class="unit">
				                	<label><?=__("País");?>*:</label>
				                	<div class="form-group">
				                		<select>
				                		  <option>Selecciona un país</option>
				                		  <option>Option 01</option>
				                		  <option>Option 02</option>
				                		</select>
				                		<button>+</button>
				                	</div>
				                </div>


				            </fieldset>
				        </form>
				</div>
				<div class="grid">
					<p><?=__('Al hacer clic en "Registrarme", confirmas que leíste y aceptas nuestra');?> <a href=""><?=__('declaracion de privacidad');?></a>, <?=__('incluido el uso de cookies.');?></p>
				</div>
			</div>
		</section>
	</main>
<?php include('./_foot.php'); ?>