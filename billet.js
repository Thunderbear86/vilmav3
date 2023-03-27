// Hent billetpris elementet
const ticketPriceElement = document.getElementById("ticket-price");

// Hent billettype elementet
const ticketTypeElement = document.getElementById("ticket-type");

// Tilføj en event listener til billettype elementet
ticketTypeElement.addEventListener("change", function() {
    // Hent den valgte billettype
    const ticketType = ticketTypeElement.value;

    // Definer billetpriser for hver billettype
    let ticketPrice = 0;
    if (ticketType === "type1") {
        ticketPrice = 150;
    } else if (ticketType === "type2") {
        ticketPrice = 300;
    } else if (ticketType === "type3") {
        ticketPrice = 500;
    }

    // Opdater billetpris elementet med den beregnede billetpris
    ticketPriceElement.value = ticketPrice;
});
