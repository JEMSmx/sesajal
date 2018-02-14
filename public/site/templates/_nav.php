<!--  Header  -->
	<div class="header-container">
		<header class="main-nav">
			<nav role="navigation">
				<!-- Logotipo de la empresa -->
				<a class="fau-logo" href="/">
					<img src="<?= $config->urls->templates ?>assets/images/sesajal-color-logo.svg" alt="">
				</a>
				<!-- Navegación principal -->
				<ul class="navigation-menu">
					<a href="/">
						<li>
							<?=__("INICIO");?>
						</li>
					</a>
					<a href="/nosotros">
						<li>
							<?=__("NOSOTROS");?>
						</li>
					</a>
					<a href="">
						<li>
							<?=__("PRODUCTOS");?>
						</li>
					</a>
					<a href="/bolsa-de-trabajo">
						<li>
							<?=__("BOLSA DE TRABAJO");?>
						</li>
					</a>
					<a href="/contacto">
						<li>
							<?=__("CONTACTO");?>
						</li>
					</a>
				</ul>

			</nav>
			<div id="nav-icon">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</header>
	</div>