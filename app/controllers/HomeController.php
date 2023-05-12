<?php


class HomeController extends Contoller
{

    public function index()
    {
        $o = new Connection();
        $c = $o->getConnection()->prepare('show tables');
        $c->execute();
        $tables = $c->fetchAll();
        $this->view->table = $tables;
        $this->view->Content('home');
    }
    public function index2()
    {
        echo 'hola 2 como estas caremonda';
    }
    public function index3()
    {
        echo 'hola 3 como estas caremonda';
    }
}
