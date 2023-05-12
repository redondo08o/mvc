<?php
require_once __DIR__.'/../sturture/Struture.php';
class Contoller{
    public $view;
    public  function __construct() 
    {
        $this->view= new Struture(); 
    }
}