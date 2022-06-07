<?php
class conexionBD{
    public static function conexionPDO(){
        $host = 'localhost:3308';
        $usuario = 'root';
        $contrasena = '';
        $dbName = 'pruebapagina2';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbName", $usuario, $contrasena);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Base de datos conectada correctamente';
            return $pdo;
        } catch (Exception $e) {
            echo 'La conexión a a base de datos a fallado';
        }
    }

    public function cerrar_conexion(){
        $this->pdo->close();
    }
}

?>