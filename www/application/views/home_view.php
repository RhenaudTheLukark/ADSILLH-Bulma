    <!-- ADD HEADER -->

    <section class="section">
      <div class="container">
        <div class="columns is-multiline is-centered">
          <?php $i = 0; ?>
          <?php foreach ($recipes as $recipe): ?>
          <div class="column is-narrow is-one-third">
            <a href="/recipe/<?php echo $recipe->name ?>">
              <figure class="image is-4by3">
                <img src="https://picsum.photos/640/480"></img>
              </figure>
              <div class="bd-notification is-info has-text-centered">
                <br><div class="subtitle"><?php echo $recipe->name ?></div>
              </div>
            </a>
          </div>
          <?php
            if (++$i >= 6)
              break;
            ?>
          <?php endforeach ?>
        </div>
      </div>
    </section>

    <!-- ADD FOOTER -->
