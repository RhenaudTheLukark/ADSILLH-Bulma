    <!-- ADD HEADER -->

    <section class="section">
      <div class="container">
        <ul style="list-style-type:disc">
        <?php foreach ($dummy as $ingredient): ?>
          <form method="POST" action="http://adsillh-bulma.fr/ingredients/update" class="field has-addons has-addons-centered">
            <div class="control">
              <input type="hidden" name="id" value="<?php echo $ingredient->id ?>"/>
              <input class="input is-rounded" type="text" name="name" value="<?php echo $ingredient->name ?>"/>
            </div>
            <div class="control">
              <input type="submit" class="button is-info" value="Update"/>
            </div>
          </form>
        <?php endforeach ?>
        <form method="POST" action="http://adsillh-bulma.fr/ingredients/insert" class="field has-addons has-addons-centered">
          <div class="control">
            <input class="input is-rounded" type="text" name="name"/>
          </div>
          <div class="control">
            <input type="submit" class="button is-info" value="Ajouter"/>
          </div>
        </form>
      </div>
    </section>

    <!-- ADD FOOTER -->