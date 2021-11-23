<?php

/**
 * Description of CandidatoDAO
 *
 * @author Andres Cordoba Gutierrez
 */
class CandidatoDAO {

    public function find($id) {
        $sql = "SELECT * FROM candidatos WHERE id=$id";
        if (!$result = $this->conn->query($sql)) {
            die("Error en la SQL : " . $this->conn->error);
        }
        return $result->fetch_object('Candidato');
    }

    public function obtener_todos($orden = 'ASC', $campo = 'id') {
        $sql = "SELECT * FROM candidatos ORDER BY $campo $orden";
        if (!$result = $this->conn->query($sql)) {
            die("Error en la SQL: " . $this->conn->error);
        }
        $array_obj_candidatos = array();
        while ($usuario = $result->fetch_object('Candidato')) {
            $array_obj_candidatos[] = $candidatos;
        }
        return $array_obj_candidatos;
    }

    public function Insertar($candidato) {
        //Comprobamos que el parámetro sea de la clase Usuario
        if (!$candidato instanceof Candidato) {
            return false;
        }
        $nombre = $candidato->getNombre();
        $foto = $candidato->getFoto();

        $sql = "INSERT INTO candidatos (nombre, foto) VALUES ('$nombre','$foto')";
        if (!$result = $this->conn->query($sql)) {
            die("Error en la SQL: " . $this->conn->error);
        }
        //Guardo el id que le ha asignado la base de datos en la propiedad id del objeto
        $candidato->setId($this->conn->insert_id);
        return true;
    }

    public function borrar($candidato) {
        //Comprobamos que el parámetro no es nulo y es de la clase Usuario
        if ($candidato == null || get_class($candidato) != 'Candidato') {
            return false;
        }
        $sql = "DELETE FROM candidatos WHERE id = " . $candidato->getId();
        if (!$result = $this->conn->query($sql)) {
            die("Error en la SQL: " . $this->conn->error);
        }
        if ($this->conn->affected_rows == 1) {
            return true;
        } else {
            return false;
        }
    }

}
