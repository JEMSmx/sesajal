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
						<li <?php if($page->template=='home') echo 'class="active"'; ?>>
							<?=__("INICIO");?>
						</li>
					</a>
					<a  href="/nosotros">
						<li <?php if($page->template=='nosotros') echo 'class="active"'; ?>>
							<?=__("NOSOTROS");?>
						</li>
					</a>
					<a href="/#productos">
						<li <?php if($page->template=='productos') echo 'class="active"'; ?>>
							<?=__("PRODUCTOS");?>
						</li>
					</a>
					<a href="/bolsa-de-trabajo">
						<li <?php if($page->template=='bolsa-trabajo') echo 'class="active"'; ?>>
							<?=__("BOLSA DE TRABAJO");?>
						</li>
					</a>
					<a href="/contacto">
						<li <?php if($page->template=='contacto') echo 'class="active"'; ?>>
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