<?php

class Usuario{
    private $_id_user;
    private $_nombre_user;
    private $_email_user;
    private $_password_user;
    private $_tipo_user;
    private $_photo;

    // private $_id_cita;


    public function __construct($_id_user, $_nombre_user, $_email_user, $_password_user, $_tipo_user, $photo)
    {
        $this->setId($_id_user);
        $this->setNombre($_nombre_user);
        $this->setEmail($_email_user);
        $this->setPassword($_password_user);
        $this->setTipo($_tipo_user);
        $this -> setPhoto($photo);
        // $this->set_IdCita($_id_cita);
    }

    public function getId() {
        return $this->_id_user;
    }

    public function setId($id) {
        $this->_id_user = $id;
    }

    public function getNombre() {
        return $this->_nombre_user;
    }

    public function setNombre($nombre) {
        $this->_nombre_user = $nombre;
    }

    public function getEmail() {
        return $this->_email_user;
    }

    public function setEmail($email) {
        $this->_email_user = $email;
    }

    public function getPassword() {
        return $this->_password_user;
    }

    public function setPassword($password) {
        $this->_password_user = $password;
    }

    public function getTipo() {
        return $this->_tipo_user;
    }

    public function setTipo($tipo) {
        $this->_tipo_user = $tipo;
    }

    public function get_idCita() {
        return $this->_id_cita;
    }

    public function set_IdCita($id_cita) {
        $this->_id_cita = $id_cita;
    }

    public function getPhoto() {
        return $this -> _photo;
    }

    public function setPhoto($photo) {
        $this -> _photo = base64_encode($photo);
    }

    public function getArray() {
        $array = array();

        $array["id"] = $this->getId();
        $array["nombreUser"] = $this->getNombre();
        $array["emailUser"] = $this->getEmail();
        $array["passwordUser"] = $this->getPassword();
        $array["tipoUser"] = $this->getTipo();
        $array["photoUser"] = $this -> getPhoto();

        // $array["idCitaUser"] = $this->get_idCita();


        return $array;
    }

}


?>