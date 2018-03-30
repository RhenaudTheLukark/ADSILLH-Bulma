const $addPersonButton = $("#personnes-plus");
const $remPersonButton = $("#personnes-moins");

$addPersonButton.on("click", (e) => {
    let $number = parseFloat($("#personnes").text());
    $funcChangeRecipe($number, $number + 1);
});

$remPersonButton.on("click", (e) => {
    let $number = parseFloat($("#personnes").text());
    if($number > 1)
        $funcChangeRecipe($number, $number - 1);
});

$funcChangeRecipe = function(number, newNumber) {
    let $multiply = newNumber / number;
    $(".ingredient").each((index, elem) => {
        let $tempIng = parseFloat($(elem).text()) * $multiply;
        $(elem).text($tempIng.toString());
    });
    $("#personnes").text(newNumber.toString());
}

// BULMA - Burger menu
document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }
});