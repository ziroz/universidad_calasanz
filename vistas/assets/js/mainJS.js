var fici = fici || {};

fici = {
    abrirModal: function (url, container) {
        container = container || "#modal-main";
        $(container).load(url, function () {
            $(container).modal({backdrop: 'static', keyboard: false});
            fici.inicializarDatePicker(container);
            fici.inicializarValidaciones($(container).find('form'));
        });
    },
    inicializarDatePicker: function (container) {
        $(container).find(".date").datetimepicker({
            format: 'DD/MM/YYYY'
        });
    },
    inicializarValidaciones: function (form) {

        form.find('.required').attr('data-validation', 'required');

        $.each(form.find('.email'), function (index, item) {
            var validation = $(item).attr('data-validation') || '';
            $(item).attr('data-validation', validation + ' email');
        });

        $.each(form.find('.number'), function (index, item) {
            var validation = $(item).attr('data-validation') || '';
            $(item).attr('data-validation', validation + ' number');
        });

        $.each(form.find('.date'), function (index, item) {
            var validation = $(item).attr('data-validation') || '';
            $(item).attr('data-validation', validation + ' date');
            $(item).attr('data-validation-format', 'dd/mm/yyyy');
        });

        $.each(form.find('.currency'), function (index, item) {
            $(this).inputmask("currency", {
                digits: 0,
                removeMaskOnSubmit: true,
                groupSeparator: ".",
                radixPoint:".", 
                autoGroup: true,
                prefix: '$'
            });
            
            $(this).css("text-align","left");
        });

        $.validate();
    }


};

$(document).ready(function () {
    $("body").on("click", "a.openModal", function (e) {
        e.preventDefault();
        fici.abrirModal($(this).attr("href"));
    })
});
