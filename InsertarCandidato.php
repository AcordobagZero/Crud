<?php
session_start();

require 'ConexionBD.php';
require 'Candidato.php';
require 'CandidatoDAO.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $candidato = new Candidato();
        $candidato->setNombre($_POST['nombre']);

        $CandidatoDAO = new CandidatoDAO(ConexionBD::conectar());
        $CandidatoDAO->Insertar($candidato);
        header('Location: index.php');
        die();
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre del Candidato"> <br>
            <input type="file" name="foto" accept="image/*"><br>
            <input type="submit" value="insertar">
            <input type="button" value="volver" onclick="location.href = 'index.php'">
        </form>
    </body>
</html>

