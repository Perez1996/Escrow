<?php

session_start(); 

include './metodosDAO.php';

$op=$_REQUEST['op'];
        
switch ($op){
    case 1:
        unset($_SESSION['lista']);
        $objMetodo= new metodosDAO();
        $lista=$objMetodo->listarProductos();
        $_SESSION['lista']=$lista;
        header("Location:../Views/Catalogo.php");
        break;
    case 2:
        break;
            
}

