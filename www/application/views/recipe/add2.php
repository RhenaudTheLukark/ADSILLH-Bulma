    <!-- ADD HEADER -->

    <section class="section">
      <div class="container">
        <form method="POST" action="http://adsillh-bulma.fr/index.php/recipes/insert" class="field has-addons has-addons-centered">
          <div class="control">
            Nom de la recette: <input id="name" class="input is-rounded" type="text" name="name" value="<?php echo $data["name"] ?>" readonly/>
            Temps de préparation: <input id="time" class="input is-rounded" type="text" name="time" value="<?php echo $data["time"] ?>" readonly/>
            Difficulté: <input id="diff" class="input is-rounded" type="text" name="difficulty" value="<?php echo $data["difficulty"] ?>" readonly/>
            Nombre de personnes: <input id="ppNb" class="input is-rounded" type="text" name="peopleNb" value="<?php echo $data["peopleNb"] ?>" readonly/>
            Préparation: <input id="text" class="input is-rounded" type="text" name="text" value="<?php echo $data["text"] ?>" readonly/>
            <input type="submit" class="button is-info" value="Valider la recette"/>
          </div>
        </form><br>
        
        <p>
          Ingrédients:
          <ul>
            <div id="result"></div>
          </ul>
        </p><br>

        <form id="ajax-form" method="POST" action="http://adsillh-bulma.fr/index.php/recipes/addAjax" class="field has-addons has-addons-centered">
          <div class="control">
            Nom: <input id="ajax-name" class="input is-rounded" type="text" name="ingName" />
            Quantité: <input id="ajax-quty" class="input is-rounded" type="text" name="quantity" />
            Unité: <input id="ajax-qtyU" class="input is-rounded" type="text" name="quantityUnit" />
            <input id="ajax-add" type="submit" class="button is-info" value="Ajouter ingrédient"/>
          </div>
        </form>
      </div>
    </section>

    <script>
      $(document).ready(function() { 
        $('#ajax-add').on('click', (e) => {
          e.preventDefault();
          $data = {
            name: $("#ajax-name").val(),
            quantity: $("#ajax-quty").val(),
            quantityUnit: $("#ajax-qtyU").val()
          }
          $.ajax({
            url: "http://adsillh-bulma.fr/index.php/recipes/addAjax",
            type: "POST",
            data: {name:$("#name").val(), ingName:$data.name, quantity:$data.quantity, quantityUnit:$data.quantityUnit}
          })
          .done((data) => {
            console.log("Look mom I did it!");
            console.dir(data);
            if (data === null) {
              console.log("Shiiiieeeeeet");
            } else {
              const $li = $('<li>').text($("#ajax-name").val() + ": " + $("#ajax-quty").val() + $("#ajax-qtyU").val());
              $('#result').append($li);
            }
          })
          .fail(() => {
            console.error("And...you failed. Miserably.");
          })
          .always(() => {
            console.log("AJAX sent!");
          });
        });
      });
    </script>
    
    <!-- ADD FOOTER -->