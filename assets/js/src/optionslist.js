"use strict";
function init() {
    var e = document.getElementsByClassName("options-list");
    Array.from(e).forEach(function (e) {
        OptionsList(e);
    });
}
function OptionsList(e) {
    e = e.getElementsByClassName("option-item");
    Array.from(e).forEach(function (e) {
        console.log(e),
            (function (e) {
                var n = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : e;
                e.addEventListener("click", function () {
                    var e;
                    (e = n).classList.contains("open") ? e.classList.remove("open") : e.classList.add("open");
                });
            })(e);
    });
}
"loading" === document.readyState ? document.addEventListener("DOMContentLoaded", init) : init();
