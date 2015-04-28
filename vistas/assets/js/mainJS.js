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
            var newItem = '<input type="hidden" id="' + $(item).attr("id") + '" name="' + $(item).attr("name") + '" value="' + $(item).val() + '" />';
            $(item).parent().append(newItem);

            $(item).removeAttr('id');
            $(item).removeAttr('name');
            
            $(item).attr('data-precision', '0');
            $(item).attr('data-thousands', '.');
            $(item).attr('data-prefix', '$ ');
            $(item).maskMoney();
            $(item).on('change',function(e){
                $("#" + $(newItem).attr("id")).val($(this).maskMoney('unmasked')[0]);
            });
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
