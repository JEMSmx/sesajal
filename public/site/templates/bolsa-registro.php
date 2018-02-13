<?php include('./_head.php'); 

	include('./_nav.php'); ?>
	<main class="j-workspace bolsa-registro-workspace">
		<section class="" style="">
			<div class="j-wrap" style="">
				<h1>REGISTRO DE USUARIOS</h1>
				<h3 class="number-title">DATOS DE LA CUENTA</h3>
				<div class="grid">
					<form>
				            <fieldset>
				            	<div class="unit">
				            		<!-- Text input -->
				            		<label for="text">Usuario*:</label>
				            		<input id="text" type="text" placeholder="placeholder">
				            	</div>
				            	<div class="unit">
				            		<!-- Password -->
				            		<label>Contraseña*:</label>
				            		<input type="password" value="password">
				            		<input type="password" value="password">
				            	</div>
				            	<div class="unit">
				            		<!-- Email -->
				            		<label>Correo*:</label>
				            		<input type="email">
				            		<input type="email">
				            	</div>
				            </fieldset>
				        </form>
				</div>
				<h3 class="number-title">DATOS DEL USUARIO</h3>
				<div class="grid">
					<form>
				            <fieldset>
				                
				               
				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text">Nombre*:</label>
				                	<input id="text" type="text" placeholder="placeholder">
				                </div>

				                <div class="unit">
				                	<!-- Text input -->
				                	<label for="text">Apellidos*:</label>
				                	<input id="text" type="text" placeholder="placeholder">
				                	<input id="text" type="text" placeholder="placeholder">
				                </div>


								<div class="unit">
									<label>Sexo*:</label>
									<select>
										<option>Selecciona un sexo</option>
										<option>Option 01</option>
										<option>Option 02</option>
									</select>
								</div>

				                <div class="unit">
				                	<label>Fecha de nacimiento*:</label>
				                	<div class="simple-block">
				                		<select>
				                		  <option>Día</option>
				                		</select>
				                		<select>
				                		  <option>Mes</option>
				                		</select>
				                		<select>
				                		  <option>Año</option>
				                		</select>
				                	</div>
				                </div>

				                <div class="unit">
				                	<label>País*:</label>
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
					<p>Al hacer clic en "Registrarme", confirmas que leíste y aceptas nuestra <a href="">declaracion de privacidad</a>, incluido el uso de cookies.</p>
				</div>
			</div>
		</section>
	</main>
<?php include('./_foot.php'); ?>