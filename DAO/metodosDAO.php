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

    public function listarProductos() {
        $cnx = new DBConnect();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("select * from Productos");
        $res->execute();

        foreach ($res as $row) {
            $lista[] = $row;
        }
        return $lista;
    }

    public function listarMarcas() {
        $cnx = new DBConnect();
        $cn = $cnx->getConexion();

        $res = $cn->prepare("select * from Brands");
        $res->execute();

        foreach ($res as $row) {
            $marcas[] = $row;
        }
        return $marcas;
    }

    public function agregarProductos($modelo, $valor, $img, $marca) {
        $cnx = new DBConnect();
        $cn = $cnx->getConexion();

        $sql = 'CALL creaProducto(?,?,?,?)';
        $stmt = $cn->prepare($sql);

        $stmt->bindParam(1, $modelo, PDO::PARAM_STR);
        $stmt->bindParam(2, $valor, PDO::PARAM_INT);
        $stmt->bindParam(3, $img, PDO::PARAM_STR);
        $stmt->bindParam(4, $marca, PDO::PARAM_STR);
        $stmt->execute();


        if ($stmt) {
            echo "Datos insertados";
        } else {
            echo "Conexion fallida";
        }
    }

}
