    <!-- ADD HEADER -->

    <section class="section">
      <div class="container">
        <div class="box has-text-centered">
         <h1> <?php echo $title ?> </h1>
	  <img src="/assets/img/cooking-1869942_1280.jpg" alt="Pâtes a la bière" width="500px" />
	</div>
	<div class="columns is-mobile">
	  <div class="column has-text-centered has-centered">
	    <div class="content">
	      Temps de cuisson: <?php echo $time ?>mn
	    </div>
	  </div>
	  <div class="column has-text-centered has-centered">
	    <div class="content">
	      Nb personnes: <div id="personnes"><?php echo $personne ?></div>
         <button type="button" id="personnes-moins">-</button>
         <button type="button" id="personnes-plus">+</button>
	      </div>
	  </div>
	  <div class="column has-text-centered has-centered">
	    <div class="content">
	      Difficulté: facile <?php echo $diff ?>/4
	      </div>
	  </div>
	</div>
	<div class="columns is-mobile">
	  <div class="column">
	    <div class="content">
	      <h2>Ingredient</h2>
	      <ul>
            <?php
              for ($i = 0 ; $i < count($ingredient) ; $i++) {
                echo "<li><span class=\"ingredient\">". $ingredient[$i][1] .
                    "</span>".$ingredient[$i][2] ." de ".$ingredient[$i][0].
                    "</li>";
              }
            ?>
	      </ul>
	    </div>
	  </div>
	  <div class="column is-9">
	    <div class="content">
	      <h2>Préparation</h2>
	      <?php echo "<ol>".$recipe."</ol>"; ?>
	    </div>
	  </div>
	</div>
      </div>
    </section>

    <!-- ADD FOOTER -->