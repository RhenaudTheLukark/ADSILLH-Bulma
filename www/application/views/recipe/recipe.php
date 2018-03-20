    <!-- ADD HEADER -->

    <section class="section">
      <div class="container">
        <div class="box has-text-centered">
         <h1> <?php echo $recipe[0]->name ?> </h1>
	  <img src="/assets/img/cooking-1869942_1280.jpg" alt="Pâtes a la bière" width="500px" />
	</div>
	<div class="columns is-mobile">
	  <div class="column has-text-centered has-centered">
	    <div class="content">
	      Temps de cuisson: <?php echo $recipe[0]->time ?>mn
	    </div>
	  </div>
	  <div class="column has-text-centered has-centered">
	    <div class="content">
         Nb personnes: <div id="personnes"><?php echo $recipe[0]->peopleNb ?></div>
         <button type="button" id="personnes-moins">-</button>
         <button type="button" id="personnes-plus">+</button>
	      </div>
	  </div>
	  <div class="column has-text-centered has-centered">
	    <div class="content">
	      <p>Difficulté: facile <?php echo $recipe[0]->difficulty ?>/4</p>
	      </div>
	  </div>
	</div>
	<div class="columns is-mobile">
	  <div class="column">
	    <div class="content">
	      <h2>Ingredient</h2>
	      <ul>
            <?php foreach ($ingredients as $ingredient): ?>
            <li>
              <span class="ingredient"> <?php echo $ingredient['ingredient'] ?> </span>
              <?php echo $ingredient['quantity'] ?> de <?php echo $ingredient['quantity_unit'] ?>
            </li>
            <?php endforeach ?>
	      </ul>
	    </div>
	  </div>
	  <div class="column is-9">
	    <div class="content">
	      <h2>Préparation</h2>
	      <ol><?php echo $recipe[0]->text ?><ol>
	    </div>
	  </div>
	</div>
      </div>
    </section>

<!-- ADD FOOTER -->
