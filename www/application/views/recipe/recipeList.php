    <!-- ADD HEADER -->

    <section class="section">
      <div class="container">
        <ul style="list-style-type:disc">
        <?php 
        foreach ($dummy as $ingredient) { 
          echo "<li>Value<ul style=\"list-style-type:circle\">";
          foreach ($ingredient as $val) { 
            echo "    <li>" . (string)$val . "</li>";
          }
          echo "</ul></li>";
        } ?>
      </ul>
      </div>
    </section>

    <!-- ADD FOOTER -->