function rating(x) {
    var x = document.getElementById("pancakes").querySelector("#rating" + x);

    if (x.className === "checked") {
        x.className = "unchecked";
    } else {
        x.className = "checked";
    }
}
