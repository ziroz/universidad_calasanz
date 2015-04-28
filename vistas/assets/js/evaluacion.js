(function (app, $) {
     var model;
 
     app.evaluacion = app.evaluacion || {};
     
     var asignatura = function (data) {
          var self = this;

        self.hola = ko.observable();
     }

    app.evaluacion.initModel = function (jsModel) {
         debugger;
         model = new asignatura(jsModel);
         console.log(model.hola());
         ko.applyBindings(model, document.getElementById("main"));
     }

}(window.fici = window.fici || {}, jQuery));
