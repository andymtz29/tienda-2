<?php

session_start();
// if (!isset($_SESSION['usuario'])) {
//     header('location: login.php');
//     exit; // Añadir exit después de header para detener la ejecución
// }
require_once "./app/config/dependencias.php";
// require_once "./app/controller/db.php";

// Consulta a la tabla t_producto
// $sql = "SELECT * FROM t_producto";
// $query = $conn->prepare($sql);
// $query->execute();
// $productos = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="<?= CSS . 'tabla.css'; ?>"> 
    <link rel="stylesheet" href="css/dataTable.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 

</head>
<body>
    <?php
        if(isset($_REQUEST['view'])){
            $vista = $_REQUEST['view'];
        }else{
            $vista = "inicio";
        }
        switch($vista){
            case "inicio":{
                require_once './view/home.php';
                break;
            }
            case "login":{
                require_once './view/loginn.php';
                break;
            }
            case "registro":{
                require_once './view/registros.php';
                break;
            }
            default:{
                require_once './view/error404.php';
            }
        }

    ?>


<!-- Scripts -->
<script src="./public/js/jquery.js"></script> <!-- jQuery local -->
<script src="./public/js/dataTable.js"></script> <!-- DataTables local -->
<script src="./public/js/cerrar_sesion.js"></script> <!-- Script para cerrar sesión -->
<script src="./public/js/crud.js"></script> <!-- Otros scripts necesarios -->
</body>
</html>

