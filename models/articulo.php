<?php

class Articulo{
    private $_id_articulo;
    private $_titulo;
    private $_introduccion;
    private $_subtitulo1;
    private $_contenido1;
    private $_subtitulo2;
    private $_contenido2;
    private $_subtitulo3;
    private $_contenido3;


    // private $_imagen;

    public function __construct($id_articulo, $titulo, $introduccion, $subtitulo1, $contenido1, $subtitulo2, $contenido2, $subtitulo3, $contenido3)
    {
        $this->setId($id_articulo);
        $this->setTitulo($titulo);
        $this->setIntroduccion($introduccion);

        $this->setSubtitulo1($subtitulo1);
        $this->setContenido1($contenido1);

        $this->setSubtitulo2($subtitulo2);
        $this->setContenido2($contenido2);
        
        $this->setSubtitulo3($subtitulo3);
        $this->setContenido3($contenido3);
    }

    public function getId() {
        return $this->_id_articulo;
    }

    public function setId($id) {
        $this->_id_articulo = $id;
    }

    public function getTitulo() {
        return $this->_titulo;
    }

    public function setTitulo($titulo) {
        $this->_titulo = $titulo;
    }

    public function getIntroduccion() {
        return $this->_introduccion;
    }

    public function setIntroduccion($introduccion) {
        $this->_introduccion = $introduccion;
    }




    public function getSubtitulo1() {
        return $this->_subtitulo1;
    }

    public function setSubtitulo1($subtitulo1) {
        $this->_subtitulo1 = $subtitulo1;
    }

    public function getContenido1() {
        return $this->_contenido1;
    }

    public function setContenido1($contenido1) {
        $this->_contenido1 = $contenido1;
    }





    public function getSubtitulo2() {
        return $this->_subtitulo2;
    }

    public function setSubtitulo2($subtitulo2) {
        $this->_subtitulo2 = $subtitulo2;
    }

    public function getContenido2() {
        return $this->_contenido2;
    }

    public function setContenido2($contenido2) {
        $this->_contenido2 = $contenido2;
    }





    public function getSubtitulo3() {
        return $this->_subtitulo3;
    }

    public function setSubtitulo3($subtitulo3) {
        $this->_subtitulo3 = $subtitulo3;
    }

    public function getContenido3() {
        return $this->_contenido3;
    }

    public function setContenido3($contenido3) {
        $this->_contenido3 = $contenido3;
    }




    public function getArray() {
        $array = array();

        $array["idArticulo"] = $this->getId();
        $array["tituloArticulo"] = $this->getTitulo();
        $array["introArticulo"] = $this->getIntroduccion();

        $array["Sub1_Articulo"] = $this->getSubtitulo1();
        $array["Cont1_Articulo"] = $this->getContenido1();

        $array["Sub2_Articulo"] = $this->getSubtitulo2();
        $array["Cont2_Articulo"] = $this->getContenido2();

        $array["Sub3_Articulo"] = $this->getSubtitulo3();
        $array["Cont3_Articulo"] = $this->getContenido3();

        return $array;
    }

}


?>