const $addPersonButton = $("#personnes-plus");
const $remPersonButton = $("#personnes-moins");

$addPersonButton.on("click", (e) => {
    let $number = parseFloat($("#personnes").text());
    $funcChangeRecipe($number, $number + 1);
});

$remPersonButton.on("click", (e) => {
    let $number = parseFloat($("#personnes").text());
    if($number > 2)
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