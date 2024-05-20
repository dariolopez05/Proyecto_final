<?php

class Playa {
    protected $nombre;
    protected $ciudad;
    protected $cod_post;
    protected $cat;
    protected $valoracion;

    function __construct($nombre, $ciudad, $cod_post, $cat, $valoracion){
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->cod_post = $cod_post;
        $this->cat = $cat;
        $this->valoracion = $valoracion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    public function getCod_post()
    {
        return $this->cod_post;
    }

    public function setCod_post($cod_post)
    {
        $this->cod_post = $cod_post;
    }

    public function getCat()
    {
        return $this->cat;
    }
    public function setCat($cat)
    {
        $this->cat = $cat;
    }
    public function getValoracion()
    {
        return $this->valoracion;
    }
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;
    }
}

?>