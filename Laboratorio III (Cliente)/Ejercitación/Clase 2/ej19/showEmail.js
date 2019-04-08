"use strict";
function showEmail() {
    var htmlSelectedOptions = document.getElementById("cboMail").selectedOptions;
    for (var index = 0; index < htmlSelectedOptions.length; index++) {
        alert(htmlSelectedOptions.item(index).value);
    }
}
