<?php
/**
 * Description of ConexionBD
 *
 * @author Andres Cordoba Gutierrez
 */
class ConexionBD {
    public static function conectar(): mysqli{
        $conn = new mysqli('localhost','root','','encuestas');
        if($conn->connect_error){
            die("Error al conectar con MySQL: " . $conn->error);
        }
        return $conn;
    }
}

