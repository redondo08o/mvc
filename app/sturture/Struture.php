<?php

class Struture{
    public function Content($file){
        require_once __DIR__.'/../../views/'.$file.'.php';
    }
}
