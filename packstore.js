window.onload = function() {
    var pack = document.getElementById("pack");
    // alert("pack loaded");
    pack.addEventListener("click", openPack);
}

function randomNumber(min, max) { 
    return Math.ceil(Math.random() * (max - min) + min);
} 

function openPack() {
    // alert("open pack");
    let cardsOpened = document.getElementById("pakimon-cards-opened");
    // alert(cardsOpened);
    while (cardsOpened.firstChild) {
        cardsOpened.firstChild.remove()
    }

    for (let i = 0; i < 11; i++) {
        /* 
            <div class="pakimon-card"> 
                <img id="0">
            </div>
        */
        let cardDiv = document.createElement("div");
        cardDiv.classList.add("pakimon-card");

        let cardImg = document.createElement("img");
        cardImg.id = i;

        let num = 1;
        if (i == 10) {
            num = randomNumber(1, 4); //rare card for the last card
        } else {
            num = randomNumber(1, 4); 
        }

        cardImg.src = "/pakimon cards/base set (" + num.toString() + ").png";

        cardDiv.appendChild(cardImg);

        document.getElementById("pakimon-cards-opened").appendChild(cardDiv);
    }
}