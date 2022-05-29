<?php

class Usuario{
    private $_id_user;
    private $_nombre_user;
    private $_email_user;
    private $_contraseña_user;
    private $_tipo_user;
    private $_id_cita;


    public function __construct($_id_user, $_nombre_user, $_email_user, $_contraseña_user, $_tipo_user, $_id_cita)
    {
        $this->setId($_id_user);
        $this->setNombre($_nombre_user);
        $this->setEmail($_email_user);
        $this->setPassword($_contraseña_user);
        $this->setTipo($_tipo_user);
        $this->set_IdCita($_id_cita);
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
        return $this->_contraseña_user;
    }

    public function setPassword($password) {
        $this->_contraseña_user = $password;
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

    public function getArray() {
        $array = array();

        $array["id"] = $this->getId();
        $array["nombreUser"] = $this->getNombre();
        $array["emailUser"] = $this->getEmail();
        $array["contraseñaUser"] = $this->getPassword();
        $array["tipoUser"] = $this->getTipo();
        $array["idCitaUser"] = $this->get_idCita();


        return $array;
    }

}


?>