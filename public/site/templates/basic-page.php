<?php include("./_head.php"); ?>

  <!-- Section: More info -->
  <section class="k-section wrap wider">
    <div class="grid">
      <div class="unit half">
        <article class="k-article">
          <h2 class="k-heading"><?php echo $page->get("headline|title"); ?></h2>

          <div class="breadcrumbs">
            <?php
              foreach ($page->parents() as $item) {
                echo "<span><a href='$item->url'>$item->title</a></span> ";
              }

              echo "<span>$page->title</span> ";
            ?>
          </div>

          <p>
            <?php echo $page->summary; ?>
          </p>

          <?php echo $page->body; ?>
        </article>
      </div>

      <div class="unit half">
        <article class="k-article">
          <form class="search" action="<?php echo $pages->get('template=search')->url; ?>" method="get">
            <input type="text" name="q" placeholder="Search" value="" />
            <button type="submit" name="submit">Search</button>
          </form>

          <h2 class="k-heading">Heading 2</h2>

          <?php echo $page->sidebar; ?>
        </article>
      </div>
    </div>
  </section>

  <section class="k-section wrap wider grid">
    <ul class="topnav">
      <?php
        $homepage = $pages->get('/');
        $children = $homepage->children();
        $children->prepend($homepage);

        foreach ($children as $child) {
          if ($child->id == $page->rootParent->id) {
            echo "<li class='current'><a href='$child->url'>$child->title</a></li>";
          } else {
            echo "<li><a href='$child->url'>$child->title</a></li>";
          }
        }

        if ($page->editable()) {
          echo "<li class='edit'><a href='$page->editUrl'>Edit</a></li>";
        }
      ?>
    </ul>
  </section>

<?php include("./_foot.php"); ?>
