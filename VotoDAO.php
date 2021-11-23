<?php

/**
 * Description of VotoDAO
 *
 * @author Andres Cordoba Gutierrez
 */
class VotoDAO {
    
    public function existe($conn) {
        $this->conn = $conn;
    }
    
    public function insertar($conn) {
        $this->conn = $conn;
    }
    
    public function obtenerPorCandidato($conn) {
        $this->conn = $conn;
    }
}
