var itemTabMenu1 = document.getElementById("item1");
var itemTabMenu2 = document.getElementById("item2");
var itemTabMenu3 = document.getElementById("item3");

var stepTabMenu1 = document.getElementById("step1");
var stepTabMenu2 = document.getElementById("step2");
var stepTabMenu3 = document.getElementById("step3");
firstItem()
function firstItem() {
    itemTabMenu1.style.display = "block";
    stepTabMenu1.style.backgroundColor = "#fab700"

    itemTabMenu2.style.display = "none";
    stepTabMenu2.style.backgroundColor = "#9e7400"

    itemTabMenu3.style.display = "none";
    stepTabMenu3.style.backgroundColor = "#9e7400"
}
function secondItem() {
    itemTabMenu1.style.display = "none";
    stepTabMenu1.style.backgroundColor = "#9e7400"

    itemTabMenu2.style.display = "block";
    stepTabMenu2.style.backgroundColor = "#fab700"

    itemTabMenu3.style.display = "none";
    stepTabMenu3.style.backgroundColor = "#9e7400"
}
function finalItem() {
    itemTabMenu1.style.display = "none";
    stepTabMenu1.style.backgroundColor = "#9e7400"

    itemTabMenu2.style.display = "none";
    stepTabMenu2.style.backgroundColor = "#9e7400"

    itemTabMenu3.style.display = "block";
    stepTabMenu3.style.backgroundColor = "#fab700"
}