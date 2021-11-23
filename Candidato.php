<?php

/**
 * Description of Candidato
 *
 * @author Andres Cordoba Gutierrez
 */
class Candidato {
    private $id;
    private $nombre;
    private $foto;
    
    //Array que va a contener los votos de este Candidato
    private $articulos;

    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFoto() {
        return $this->foto;
    }

    function getArticulos() {
        return $this->articulos;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setFoto($foto): void {
        $this->foto = $foto;
    }

    function setArticulos($articulos): void {
        $this->articulos = $articulos;
    }

}
