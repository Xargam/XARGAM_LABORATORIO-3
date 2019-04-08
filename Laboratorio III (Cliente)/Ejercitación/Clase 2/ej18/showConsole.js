"use strict";
function showConsole() {
    document.getElementsByName("option").forEach(function (html) {
        if (html.checked) {
            console.log(html.value);
        }
    });
}
