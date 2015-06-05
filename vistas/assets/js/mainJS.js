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
    mostrarMensaje: function (mensaje) {
        bootbox.alert(mensaje);
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
            var validation = $(item).find("input").attr('data-validation') || '';
            $(item).find("input").attr('data-validation', validation + ' date');
            $(item).find("input").attr('data-validation-format', 'dd/mm/yyyy');
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
        fici.abrirModal($(this).attr("href"));
        e.preventDefault();
    });
    
    $("body").on("click", "a.closeSesion", function (e) {
        $("form#cerrarSesion").submit();
        e.preventDefault();
    });
    
    $('ul.nav a[href$="'+ window.location.search +'"]').parent().addClass('active');
});
