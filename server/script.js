let menu = document.querySelector("#menu-bar")
let navbar = document.querySelector("nav")


menu.onscroll = () => {
    menu.classList.remove("active")
    menu.classList.remove("fa-times")
}

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

x = () => {
    let alert = document.getElementById("notifEmail")
    alert.style.display = "none";
}

function checkDateInputInfo() {
    console.log("checkDataInputInfo");
    from = document.getElementById("fromInfo");
    to = document.getElementById("toInfo");

    from.max = to.value;
    to.min = from.value;
}

function filterVacations() {
    console.log("filterVacations");
    vecationName = document.getElementById("name").value;
    cardContainer = document.getElementById("cardContainer");
    cards = cardContainer.getElementsByTagName("card");

    for (i = 0; i < cards.length; i++) {
        cards[i].style.display = "none";
        vacationNameFilter = cards[i].getElementsByTagName("vacationName")[0].innerText;
        vacationNameFilter = vacationNameFilter.toUpperCase();

        if (vacationNameFilter.indexOf(vecationName.toUpperCase()) > -1 || vecationName.toUpperCase() == null) {
            cards[i].style.display = "";
        }
    }
}