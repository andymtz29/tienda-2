<?php
session_start();
// if (isset($_SESSION['usuario'])) {
//     header('location: ./index.php');
// }
require_once("./app/config/dependencias.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">

    <title>Formulario de datos</title>
</head>
<body>
    <script src="./public/js/registro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>