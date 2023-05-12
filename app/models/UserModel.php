<?php

class UserModel{

    public static function store($param)
    {
        $o = new Connection();
        $query = 'INSERT INTO user (nombre,apellido,cc)
                    VALUES(?,?,?) 
        ';
        $p = $o->getConnection()->prepare($query);
        $array = array($param['nombre'],$param['apellido'],$param['cc']);
        $res = $p->execute($array);
        return $res;
        
    }

}