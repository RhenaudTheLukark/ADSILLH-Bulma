    <!-- ADD HEADER -->

    <section class="section">
      <div class="container">
        <?php foreach ($dummy as $recipe): ?>
          <form method="POST" action="http://adsillh-bulma.fr/index.php/recipes/update" class="field has-addons has-addons-centered">
            <div class="control">
              <input type="hidden" name="id" value="<?php echo $recipe->id ?>"/>
              <input class="input is-rounded" type="text" name="name" value="<?php echo $recipe->name ?>"/>
              <input class="input is-rounded" type="text" name="time" value="<?php echo $recipe->time ?>"/>
              <input class="input is-rounded" type="text" name="difficulty" value="<?php echo $recipe->difficulty ?>"/>
              <input class="input is-rounded" type="text" name="peopleNb" value="<?php echo $recipe->peopleNb ?>"/>
              <input class="input is-rounded" type="text" name="text" value="<?php echo $recipe->text ?>"/>
            </div>
            <div class="control">
              <input type="submit" class="button is-info" value="Update"/>
            </div>
          </form>
        <?php endforeach ?>
        <form method="POST" action="http://adsillh-bulma.fr/index.php/recipes/insert" class="field has-addons has-addons-centered">
          <div class="control">
              <input class="input is-rounded" type="text" name="name" />
              <input class="input is-rounded" type="text" name="time" />
              <input class="input is-rounded" type="text" name="difficulty" />
              <input class="input is-rounded" type="text" name="peopleNb" />
              <input class="input is-rounded" type="text" name="text" />
          </div>
          <div class="control">
            <input type="submit" class="button is-info" value="Ajouter"/>
          </div>
        </form>
      </div>
    </section>

    <!-- ADD FOOTER -->