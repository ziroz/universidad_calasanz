<?php

class SeguridadController extends MasterController {

    public function getLogin($request) {

        $data['tituloPagina'] = "Login";

        if (isset($request['returnUrl'])) {
            $data['returnUrl'] = $request['returnUrl'];
        }

        View::load("Seguridad/Login", $data);
    }

    public function postLogin($request) {

        $usuario = seguridadM::retornar($request);
        if (count($usuario) > 0) {
            Session::initSesion($usuario);
            if (isset($request['returnUrl'])) {
                Redirect::to($request['returnUrl']);
            } else {
                Redirect::to(Url::getUrl("programas", "index"));
            }
        } else {
            Redirect::to(Url::getUrl("seguridad", "login"));
        }
    }

}
