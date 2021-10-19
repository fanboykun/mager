import cash from "cash-dom";
(function (cash) {
    "use strict";

    // Show modal
    // cash("#open-modal").on("click", function () {
    //     cash("#modal").modal("show");
    // });

    // // Hide modal
    // cash("#hide-modal").on("click", function () {
    //     cash("#modal").modal("hide");
    // });

    // Toggle modal
    cash("#open-modal").on("click", function () {
        cash("#modal").modal("toggle");
    });
})(cash);
