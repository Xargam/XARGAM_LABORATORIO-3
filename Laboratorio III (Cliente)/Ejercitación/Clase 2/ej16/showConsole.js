"use strict";
function showConsole() {
    var inputData = document.getElementsByName("txtBox");
    var areaData = document.getElementById("txtCurriculum");
    inputData.forEach(function (html) {
        if (html.value != "") {
            console.log(html.value);
        }
    });
    if (areaData.value != "") {
        console.log(areaData.value);
    }
}
