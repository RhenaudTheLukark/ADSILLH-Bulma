let $personnesNumber = $("#personnes").text();

const $addPersonButton = $("#personnes-plus");

$addPersonButton.on("click", (e) => {
    $.each($qteIngredients, (index, elem) => {
        let qte = parsefloat($(elem).text()) / numPerson;
        
        qte = qte * numPerson;
    }
    let $number = Number($("#personnes").text());
    let $newNumber = number + 1
    let $multiply = newNumber / number
    let $ings = $("ingredient")
    ings.each(() => { 
        let $tempIng = Number(this.html()) * multiply
        this.html(tempIng.toString());
    }
});