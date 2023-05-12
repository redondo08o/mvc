<?php
require_once __DIR__.'/../models/UserModel.php';

class HomeController extends Contoller
{

    public function index()
    {
        $this->view->Content('home');
    }
    public function index2()
    {
        extract($_POST);
        $param['nombre'] = $nombre;
        $param['apellido'] = $apellido;
        $param['cc'] = $cc;
        $res = UserModel::store($param);

        if($res > 0){
            echo json_encode(array(
                'message' => 'registrado correctamente',
                'icon'    => 'success'
            ));
        }
    }
    public function index3()
    {
        echo 'hola 3 como estas caremonda';
    }
}
