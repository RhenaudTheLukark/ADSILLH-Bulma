    <!-- ADD HEADER -->

    <section class="section">
      <div class="container">
        <?php foreach ($dummy as $recipe): ?>
          <form method="POST" action="/recipes/update" class="field has-addons has-addons-centered">
            <div class="control">
              <label class="label">Recette</label>
              <input type="hidden" name="id" value="<?php echo $recipe->id ?>"/>
              Nom: <input class="input is-rounded" type="text" name="name" value="<?php echo $recipe->name ?>"/>
              Temps de réparation: <input class="input is-rounded" type="text" name="time" value="<?php echo $recipe->time ?>"/>
              Difficulté: <input class="input is-rounded" type="text" name="difficulty" value="<?php echo $recipe->difficulty ?>"/>
              Nombre de personnes: <input class="input is-rounded" type="text" name="peopleNb" value="<?php echo $recipe->peopleNb ?>"/>
              Texte: <input class="input is-rounded" type="text" name="text" value="<?php echo $recipe->text ?>"/>
            </div>
            <div class="control">
              <input type="submit" class="button is-info" value="Update"/>
            </div>
          </form>
        <?php endforeach ?>
        <form method="POST" action="/recipes/add2" class="field has-addons has-addons-centered">
          <div class="control">
              <label class="label">Nouvelle recette</label>
              Nom: <input id="ajax-name" class="input is-rounded" type="text" name="name" />
              Temps de réparation: <input id="ajax-time" class="input is-rounded" type="text" name="time" />
              Difficulté: <input id="ajax-diff" class="input is-rounded" type="text" name="difficulty" />
              Nombre de personnes: <input id="ajax-ppNb" class="input is-rounded" type="text" name="peopleNb" />
              Texte: <input id="ajax-text" class="input is-rounded" type="text" name="text" />
          </div>
          <div class="control">
            <input id="ajax-add" type="submit" class="button is-info" value="Ajouter"/>
          </div>
        </form>
      </div>
    </section>

    <!-- ADD FOOTER -->
