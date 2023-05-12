<?php


class Router{
    public static function Route($controller , $method){

        $file = '../app/controllers/'.$controller.'.php';
        if(file_exists($file)){
            require_once($file);
            $object = new  $controller();

            if(method_exists($object,$method)){
                $object->$method();
            }
            else{
                echo 'metodo no existe';
            }
        }else{
            echo 'controlador no existe';
        }
    }

    public static function routing($routes,$ruta){
        foreach($routes as $v){
            if($v[0] == $ruta){
                Router::Route($v[1],$v[2]);
            }
            
            }
    }
}