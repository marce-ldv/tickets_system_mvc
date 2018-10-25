<?php

namespace Config;

class Router // extends singleton ??
{

    public static function go(Request $request)
    {
        $controller = $request->getController() . 'Controller';
        $method = $request->getMethod();
        $parameters = $request->getParameters();

        //$ruta = ROOT . 'Controladoras/' . $controlador . '.php';

        //require_once $ruta;
        self::executeMethod(self::instaceMethod($controller), $method, $parameters);
    }

    private static function instaceMethod($controller)
    {
        $show = "Controller\\" . $controller;
        return new $show;
    }

    private static function executeMethod($controller, $method, $parameters)
    {
        if (!isset($parameters)) {
            call_user_func(array($controller, $method));
        } else {
            call_user_func_array(array($controller, $method), $parameters);
        }
    }
}
