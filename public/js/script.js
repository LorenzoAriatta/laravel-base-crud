console.log('JS OK!');

let btn = document.getElementsByClassName("delete-button");

let popUp = document.querySelector("popUp");

let close = document.getElementsByClassName("close")[0];

console.log(btn);


btn.onclick = function () {
    modal.style.display = "block";
}



window.onclick = function (event) {
    if (event.target == popUp) {
        modal.style.display = "none";
    }
}
