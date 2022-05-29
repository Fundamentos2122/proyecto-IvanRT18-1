<?php

class Cita{
    private $_id_cita;
    private $_dia_cita;
    private $_hora_cita;
    private $_user_cita;

    public function __construct($id_cita, $dia_cita, $hora_cita, $user_cita)
    {
        $this->setId($id_cita);
        $this->setDia($dia_cita);
        $this->setHora($hora_cita);
        $this->setUser($user_cita);
    }

    public function getId() {
        return $this->_id_cita;
    }

    public function setId($id) {
        $this->_id_cita = $id;
    }

    public function getDia() {
        return $this->_dia_cita;
    }

    public function setDia($dia) {
        $this->_dia_cita = $dia;
    }

    public function getHora() {
        return $this->_hora_cita;
    }

    public function setHora($hora) {
        $this->_hora_cita = $hora;
    }

    public function getUser() {
        return $this->_user_cita;
    }

    public function setUser($user) {
        $this->_user_cita = $user;
    }


    public function getArray() {
        $array = array();

        $array["idCita"] = $this->getId();
        $array["diaCita"] = $this->getDia();
        $array["horaCita"] = $this->getHora();
        $array["userCita"] = $this->getUser();

        return $array;
    }

}


?>