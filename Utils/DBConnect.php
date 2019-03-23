<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnect
 *
 * @author perez
 */
class DBConnect {
    public function getConexion(){
        $cnx = new PDO("mysql:host=localhost;dbname=escrow", "root", "110196Ep");
        return $cnx;
    }
}
