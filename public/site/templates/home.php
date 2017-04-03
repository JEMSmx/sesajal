<?php include('./_head.php'); ?>

  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header">
      <h1 class="k-heading"><?php echo $page->get('headline|title'); ?></h1>
      <p><?php echo $page->summary; ?></p>
    </div>
  </div>

  <!-- Section: Main -->
  <section class="k-section wrap wider">
    <div class="grid">
      <div class="unit half">
        <article class="k-article">
          <h2 class="k-heading">Heading 2</h2>
          <p>
            Nullam non facilisis ante. Nam faucibus vitae tortor quis sollicitudin. Sed quis sem quam.
            Donec tortor augue, elementum quis interdum at, mattis id mi. Vivamus sodales lacinia ex,
            sed pulvinar ipsum semper vel. Nullam luctus lectus metus, eu consequat sem malesuada ut.
            Sed tincidunt sagittis neque efficitur aliquet.
          </p>

          <p>
            Nullam non facilisis ante. Nam faucibus vitae tortor quis sollicitudin. Sed quis sem quam.
            Donec tortor augue.
          </p>

          <p>
            Nullam non facilisis ante. Nam faucibus vitae tortor quis sollicitudin. Sed quis sem quam.
            Donec tortor augue, elementum quis interdum at, mattis id mi. Vivamus sodales lacinia ex,
            sed pulvinar ipsum semper vel. Nullam luctus lectus metus, eu consequat sem malesuada ut.
            Sed tincidunt sagittis neque efficitur aliquet
          </p>

          <?php echo $page->body; ?>
        </article>
      </div>

      <div class="unit half">
        <article class="k-article">
          <h3 class="k-heading">Heading 3</h3>

          <?php echo $page->sidebar; ?>

          <p class="k-sm">
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
            Proin in metus vulputate, dictum nibh eget, auctor nibh. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Praesent vel augue vitae nisi sollicitudin malesuada.
          </p>
        </article>

        <article class="k-article">
          <h4 class="k-heading">Heading 4</h4>
          <p class="k-sm">
            Morbi in vulputate ipsum. Suspendisse volutpat ante et turpis posuere, et dignissim libero efficitur.
            Nullam sed leo volutpat metus tincidunt viverra. Nulla facilisi.
          </p>

          <?php
            if (count($page->images)) {
              $image = $page->images->getRandom()->width(400);
              echo "<img src='$image->url' alt='$image->description'>";
            }
          ?>
        </article>
      </div>
    </div>
  </section>

  <!-- Jumbotron: Lorem -->
  <div class="k-jumbotron">
    <div class="k-banner wrap wider grid">
      <p class="k-color-inverse">
        <strong>Nullam enim lorem</strong>, ultricies vel pulvinar id, tempus sit amet dolor. Aliquam pretium
        non magna non ullamcorper. Nulla id auctor dui. Cras ac quam odio.
      </p>
    </div>
  </div>

  <!-- Section: More info -->
  <section class="k-section">
    <div class="wrap wider grid">
      <div class="unit half">
        <article class="k-article">
          <h2 class="k-heading">Heading 2</h2>
          <p>
            Lorem ipsum dolor sit amet, adipiscing elit. Fusce urna turpis, facilisis at diam nec, pulvinar
            molestie velit. Class aptent taciti sociosqu ad litora torquent per conubiaQuisque ut augue quis
            felis viverra pharetra ut ac orci. Phasellus tincidunt, ipsum non dictum pretium, magna tortor
            placerat risus, vitae ullamcorper mauris quam nec sem. Proin vel nisl tempus, tincidunt diam a,
            sagittis enim. Morbi in vulputate ipsum.
          </p>
        </article>
      </div>

      <div class="unit half">
        <article class="k-article">
          <h2 class="k-heading">Heading 2</h2>
          <p>
            Quisque ut augue quis felis viverra pharetra ut ac orci. Phasellus tincidunt, ipsum non dictum pretium,
            magna tortor placerat risus, vitae ullamcorper mauris quam nec sem. Proin vel nisl tempus, tincidunt
            diam a, sagittis enim. Morbi in vulputate ipsum.
          </p>
        </article>
      </div>
    </div>
  </section>

  <!-- Jumbotron: Big banner -->
  <div class="k-jumbotron">
    <div class="k-banner">
      <h2 class="k-heading k-jumbo">Header H2</h2>
      <p>Nullam enim lorem, ultricies vel pulvinar id, tempus sit amet dolor.</p>
    </div>
  </div>

  <!-- Section: Basic features -->
  <section class="k-section wrap wider">
    <div class="grid no-gutters">

      <div class="unit one-quarter">
        <figure class="k-figure">
          <!-- <?php echo k::embedded_svg("<?php echo $config->urls->templates; ?>static/455375-147357/images/like-2.svg"); ?> -->
          <div class="k-container"><a href="#"><img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/like-2.svg"></a></div>
          <figcaption>
            <h2 class="k-heading"><a href="#">Header H2</a></h2>
            <p>1 Duis feugiat pretium imperdiet. Sed varius sem metus, nec rutrum</p>
          </figcaption>
        </figure>
      </div>

      <div class="unit one-quarter">
        <figure class="k-figure">
          <a href="#">
            <div class="k-container"><img src="https://dummyimage.com/700x700/719.png"></div>
            <figcaption>
              <h2 class="k-heading">Header H2</h2>
              <p>2 elementum quis interdum at, mattis id mi</p>
            </figcaption>
          </a>
        </figure>
      </div>

      <div class="unit one-quarter">
        <figure class="k-figure">
          <div class="k-container"><img src="https://dummyimage.com/700x700/719.png"></div>
          <figcaption>
            <h2 class="k-heading"><a href="#">Header H2</a></h2>
            <p>3 Proin turpis augue, dignissim vitae aliquam et, consectetur quis neque</p>
          </figcaption>
        </figure>
      </div>

      <div class="unit one-quarter">
        <figure class="k-figure">
          <a href="#">
            <div class="k-container"><img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/settings-5.svg"></div>
            <figcaption>
              <h2 class="k-heading">Header H2</h2>
              <p>4 Maecenas vitae nisl lectus. Quisque nec gravida arcu.</p>
            </figcaption>
          </a>
        </figure>
      </div>

    </div>
  </section>

  <div class="wrap wider grid">
    <hr class="k-hr">
  </div>

  <!-- Section: Inner banner -->
  <section class="k-section">
    <div class="k-banner wrap wider grid">
      <h2 class="k-heading k-xl">Lorem ipsum dolor sit amet</h2>
      <p>In nec enim ullamcorper, scelerisque odio quis, lobortis orci.</p>
    </div>
  </section>

  <div class="wrap wider grid">
    <hr class="k-hr">
  </div>

  <!-- Section: Additionals features -->
  <section class="k-section wrap wider">
    <div class="grid">

      <div class="unit one-third">
        <div class="k-media">
          <div class="k-media-left k-sm"><img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/like-2.svg"></div>
          <div class="k-media-body">
            <h2 class="k-heading">Header H2</h2>
            <p>1 Aliquam rutrum, neque vel fermentum hendrerit, dui nibh dignissim libero.</p>
          </div>
        </div>
      </div>

      <div class="unit one-third">
        <div class="k-media">
          <div class="k-media-left k-md"><img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/like.svg"></div>
          <div class="k-media-body">
            <h2 class="k-heading">Header H2</h2>
            <p>
              2 Nam fermentum iaculis dui, sed cursus dolor. Sed porttitor tempor mattis.
              Aenean sit amet ante et tortor tempor blandit.
            </p>
          </div>
        </div>
      </div>

      <div class="unit one-third">
        <div class="k-media">
          <div class="k-media-left k-lg"> <i class="fa fa-internet-explorer fa-3x" aria-hidden="true"></i></div>
          <div class="k-media-body">
            <h2 class="k-heading">Header H2</h2>
            <p>
              3 onec pellentesque, nulla a iaculis faucibus, urna dui bibendum ipsum,
              a tempor arcu neque sagittis ipsum. Sed ultrices ornare egestas.
            </p>
          </div>
        </div>
      </div>

      <hr class="k-hr">

      <div class="k-media unit one-third">
        <h2 class="k-heading"><img class="k-sm" src="<?php echo $config->urls->templates; ?>static/455375-147357/images/umbrella.svg">Header H2</h2>
        <p>
          4 Integer fermentum dapibus mauris, sit amet maximus sapien tincidunt non.
          Donec id sapien mollis, lacinia sapien vel, maximus justo.
        </p>
      </div>

      <div class="k-media unit one-third">
        <h2 class="k-heading"><i class="fa fa-internet-explorer" aria-hidden="true"></i>Header H2</h2>
        <p>5 Aliquam rutrum, neque vel fermentum hendrerit, dui nibh dignissim libero.</p>
      </div>

      <div class="k-media unit one-third">
        <h2 class="k-heading"><img class="k-lg" src="<?php echo $config->urls->templates; ?>static/455375-147357/images/like-2.svg">Header H2</h2>
        <p>6 Nulla volutpat efficitur vehicula. Cras tempor varius magna eu auctor.</p>
      </div>

    </div>
  </section>

  <div class="wrap wider grid">
    <hr class="k-hr">
  </div>

  <!-- Section: Buttons -->
  <section class="k-section wrap wider grid">
    <div class="k-banner">
      <h2 class="k-heading">Header H2</h2>
      <p class="k-lg">Nullam enim lorem, ultricies vel pulvinar id, tempus sit amet dolor.</p>
    </div>

    <hr class="k-hr">

    <div id="thing">
      <img class="--logo" src="<?php echo $config->urls->templates; ?>static/455375-147357/images/krrrunch-logo.png">
      <div class="--bar"></div>

      <div class="k-banner">
        <h3 class="k-heading">Header H3</h3>
        <p class="k-md">Nullam enim lorem, ultricies vel pulvinar id, tempus sit amet dolor.</p>
      </div>
    </div>

    <hr class="k-hr">

    <div class="unit whole">
      <h2 class="k-heading k-vs-25p">Buttons <strong>(H2)</strong></h2>
    </div>

    <div class="unit one-third">
      <a class="k-button k-sm k-color-inverse k-bg-color-danger" href="#">Button small</a>
      <a class="k-button k-md k-color-primary k-bg-color-inverse" href="#">Button regular</a>
      <a class="k-button k-lg k-color-inverse k-bg-color-primary" href="#">Button large</a>
    </div>

    <div class="unit one-third">
      <a class="k-button k-as-block k-md k-color-inverse k-bg-color-success" href="#">Button large</a>
    </div>

    <div class="unit one-third">
      <ul id="palette-colors">
        <li class="k-bg-color-primary" title="$color-primary"></li>
        <li class="k-bg-color-secondary" title="$color-secondary"></li>
        <li class="k-bg-color-inverse" title="$color-inverse"></li>
        <li class="k-bg-color-success" title="$color-success"></li>
        <li class="k-bg-color-info" title="$color-info"></li>
        <li class="k-bg-color-warning" title="$color-warning"></li>
        <li class="k-bg-color-danger" title="$color-danger"></li>

        <li class="k-bg-gray-base" title="$gray-base"></li>
        <li class="k-bg-gray-darker" title="$gray-darker"></li>
        <li class="k-bg-gray-dark" title="$gray-dark"></li>
        <li class="k-bg-gray-regular" title="$gray-regular"></li>
        <li class="k-bg-gray-light" title="$gray-light"></li>
        <li class="k-bg-gray-lighter" title="$gray-lighter"></li>
        <li class="k-bg-gray-ghost" title="$gray-ghost"></li>
      </ul>
    </div>
  </section>

  <!-- The section above doesn't have a margin-bottom -->
  <div class="k-section wrap wider">
    <hr class="k-hr grid">
  </div>

  <!-- Grid example -->
  <section class="k-section wrap wider" id="grid-example">
    <div class="grid no-gutters no-stacking-on-mobiles">
      <div class="unit one-third">
        <code>.one-third</code>
      </div>
      <div class="unit two-thirds">
        <code>.two-thirds</code>
      </div>
    </div>

    <div class="grid">
      <div class="unit one-quarter">
        <code>.one-quarter</code>
      </div>
      <div class="unit three-quarters">
        <code>.three-quarters</code>
      </div>
    </div>

    <div class="grid">
      <div class="unit half">
        <code>.half</code>
      </div>
      <div class="unit half">

        <div class="grid no-stacking-on-mobiles">
          <div class="unit one-third">
            <code>.one-third</code>
          </div>
          <div class="unit one-third">
            <code>.one-third</code>
          </div>
          <div class="unit one-third">
            <code>.one-third</code>
          </div>
        </div>

      </div>
    </div>
  </section>

<?php include('./_foot.php'); ?>
