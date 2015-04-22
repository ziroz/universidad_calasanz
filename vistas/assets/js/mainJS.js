var fici = fici || {};

fici = {
    abrirModal: function (url, container) {
        container = container || "#modal-main";
        $(container).load(url, function () {
            $(container).modal({backdrop: 'static', keyboard: false});
            fici.addDatePickers(container);
        });
    },
    addDatePickers: function (container) {
        $(container).find(".date").datetimepicker();
    },
    cargarMenu: function(){
        $("#menu").load("../Shared/Menu.html");
    }
    
};

$(document).ready(function () {
    $("body").on("click", "a.openModal", function (e) {
        e.preventDefault();
        fici.abrirModal($(this).attr("href"));
    })
    fici.cargarMenu();
});
