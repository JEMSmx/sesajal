
  <!-- Footer -->
  <footer class="k-footer">
    <div class="wrap wider grid">

      <div class="k-sitemap unit half">
        <div class="k-container">
          <h5 class="k-heading">Header H5</h5>
          <ul>
            <li><a href="#">Link one</a></li>
            <li><a href="#">Link two</a></li>
            <li><a href="#">Link 🌲</a></li>
          </ul>
        </div>

        <div class="k-container">
          <h5 class="k-heading">Header H5</h5>
          <ul>
            <li><a href="#">Link one</a></li>
            <li><a href="#">Link two</a></li>
            <li><a href="#">Link three</a></li>
            <li><a href="#">Link four</a></li>
          </ul>
        </div>

        <div class="k-container">
          <h5 class="k-heading">Header H5</h5>

          <?php k::render_nav_tree($pages->get('/')->children, 0); ?>

          <ul>
            <li><a href="#">Link one</a></li>
            <li><a href="#">Link two</a></li>
          </ul>
        </div>
      </div>

      <div class="k-address unit half">
        <address>
          <h5 class="k-heading">Contact us H5</h5>
          <small><a href="tel:+18006732679"><strong>T.</strong> (800) 673-2679</a></small>
          <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-github-square" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-behance-square" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </address>
      </div>

      <div class="k-details">
        <small>&copy; 2016</small>

        <ul>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Terms</a></li>
          <li><?php
            if ($user->isLoggedin()) {
              echo "<a href='{$config->urls->admin}login/logout/'>Logout ($user->name)</a>";
            } else {
              echo "<a href='{$config->urls->admin}'>Admin Login</a>";
            }
          ?></li>
          <li><button onclick="$('.unit, .unit div').css('background-color','rgba(120,210,210,.5)');"><small>Debug</small></button></li>
        </ul>
      </div>

    </div>
  </footer>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NBVG29"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NBVG29');</script>
<!-- End Google Tag Manager -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.slim.min.js" integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8=" crossorigin="anonymous"></script>
<script src="<?php echo $config->urls->templates; ?>static/455375-147357/scripts/main.min.js"></script>

<svg style="display: none;">
  <symbol id="k-svg-icon-drawer" viewBox="0 0 50 72">
    <path d="M44 23H6c-1.657 0-3-1.343-3-3s1.343-3 3-3h38c1.657 0 3 1.343 3 3s-1.343 3-3 3zM44 39.007H6c-1.657 0-3-1.343-3-3s1.343-3 3-3h38c1.657 0 3 1.343 3 3s-1.343 3-3 3zM44 55H6c-1.657 0-3-1.343-3-3s1.343-3 3-3h38c1.657 0 3 1.343 3 3s-1.343 3-3 3z" />
  </symbol>

  <symbol id="k-svg-icon-close" viewBox="0 0 46 72">
    <path d="M27.243 36l14.88-14.88c1.17-1.17 1.17-3.07 0-4.24-1.172-1.173-3.072-1.173-4.243 0L23 31.757 8.122 16.878c-1.17-1.17-3.07-1.17-4.242 0-1.172 1.172-1.172 3.072 0 4.243L18.758 36 3.878 50.88c-1.17 1.17-1.17 3.07 0 4.24.587.587 1.355.88 2.123.88s1.536-.293 2.122-.88L23 40.243l14.88 14.88c.585.585 1.353.878 2.12.878.768 0 1.535-.293 2.12-.88 1.173-1.17 1.173-3.07 0-4.24L27.244 36z" />
  </symbol>
</svg>

</body>
</html>
