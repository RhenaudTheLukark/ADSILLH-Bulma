    <!-- ADD HEADER -->

    <section class="section">
      <div class="container">
        <form id="submitForm" method="POST" action="/recipes/insert" class="field has-addons has-addons-centered" onsubmit="processForm()">
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

        <form id="ajax-form" method="POST" action="/recipes/addAjax" class="field has-addons has-addons-centered">
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
      function processForm() {
        //Retreive the data from the form:
        var data = $('#submitForm').serializeArray();
        data["ingredients"] = [];

        //Add in additional data to the original form data:
        let children = $('#result').children();
        children.each(function(idx, val){
          let splitVal = val.firstChild.nodeValue.split(":");
          console.log(val.firstChild.nodeValue);
          let splitValSpace = splitVal[1].split(" ");
          data["ingredients"].push(
            {name: splitVal[0], quantity: splitValSpace[1], quantityUnit: splitVal[1].slice(splitValSpace[1].length + 2)}
          );
        });
        console.log(data);

        let selectNameData = $('<input>').attr('name','ingrNameList').toggleClass("hidden");
        let selectQutyData = $('<input>').attr('name','ingrQutyList').toggleClass("hidden");
        let selectQtyUData = $('<input>').attr('name','ingrQtyUList').toggleClass("hidden");

        $(data["ingredients"]).each(function(idx, val) {
          if (selectNameData.val() != "") {
            selectNameData.val(selectNameData.val().concat(","));
            selectQutyData.val(selectQutyData.val().concat(","));
            selectQtyUData.val(selectQtyUData.val().concat(","));
          }
          selectNameData.val(selectNameData.val().concat(val.name));
          selectQutyData.val(selectQutyData.val().concat(val.quantity));
          selectQtyUData.val(selectQtyUData.val().concat(val.quantityUnit));
        });

        $('#submitForm').append(selectNameData);
        $('#submitForm').append(selectQutyData);
        $('#submitForm').append(selectQtyUData);
      }

      $(document).ready(function() { 
        $('#ajax-add').on('click', (e) => {
          e.preventDefault();
          $data = {
            name: $("#ajax-name").val(),
            quantity: $("#ajax-quty").val(),
            quantityUnit: $("#ajax-qtyU").val()
          }
          $.ajax({
            type: "POST",
            url: "/recipes/addAjax",
            data: { name: $("#name").val(), ingName: $data.name, quantity: $data.quantity, quantityUnit: $data.quantityUnit }
          })
          .done((data) => {
            console.log("Look mom I did it!");
            console.dir(data);
            if (data === null) {
              console.log("Shiiiieeeeeet");
            } else {
              const $li = $('<li>').text($("#ajax-name").val() + ": " + $("#ajax-quty").val() + " " + $("#ajax-qtyU").val());
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