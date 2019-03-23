<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of metodosDAO
 *
 * @author perez
 */

include '../Utils/DBConnect.php';

class metodosDAO {
    public function listarProductos(){
        $cnx = new DBConnect();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select * from Productos");
        $res->execute();
        
        foreach($res as $row){
            $lista[]=$row;
        }
        return $lista;
    }
}
