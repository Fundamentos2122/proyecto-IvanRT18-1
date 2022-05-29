<?php

    include('../models/modelo_conexion.php');

    class LoginController
    {
        public function  __construct()
        {
            $db = new conexionBD;
            $this->conn = $db->conn;
        }
    }

    
?>