"use strict";
function moviesConsole() {
    document.getElementsByName("movie").forEach(function (html) {
        var htmlInput = html;
        if (htmlInput.checked === true) {
            console.log(htmlInput.value);
            htmlInput.checked = false;
        }
    });
}
