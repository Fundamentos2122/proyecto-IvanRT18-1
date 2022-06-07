<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';
include('../models/modelo_conexion.php');
include('../models/articulo.php');
include("../models/usuario.php");

// session_start();

try {
    $connection = conexionBD::conexionPDO();
} catch (PDOException $e) {
    error_log("Error de conexión - " . $e, 0);

    exit();
}

//Obtiene las noticias
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (array_key_exists("id", $_GET)) {
        //Selecciona solo una noticia
        try {
            $id = $_GET["id"];
            $query = $connection->prepare('SELECT * FROM articulos WHERE id_articulo = :id'); //Se le cambia el nombre ya sea photocard, cds, etc
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();

            $articulo;


            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $articulo = new Articulo($row['id_articulo'], $row['titulo'], $row['introduccion'], $row['subtitulo1'], $row['contenido1'], $row['subtitulo2'], $row['contenido2'], $row['subtitulo3'], $row['contenido3']);
            }
            //  var_dump($articulo);
            echo json_encode($articulo->getArray());
        } catch (PDOException $e) {
            echo $e;
        }
    } else if (!array_key_exists("id", $_GET)) {
        //Selecciona todos los articulos
        try {
            $query = $connection->prepare('SELECT * FROM articulos');
            $query->execute();

            $articulos = array(); //Genera arreglo vacio


            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $articulo = new Articulo($row['id_articulo'], $row['titulo'], $row['introduccion'], $row['subtitulo1'], $row['subtitulo1'], $row['contenido1'], $row['subtitulo2'], $row['contenido2'], $row['subtitulo3'], $row['contenido3']);
                $articulos[] = $articulo->getArray(); //Push
            }
            // var_dump($articulos[0]);
            echo json_encode($articulos);
        } catch (PDOException $e) {
            echo $e;
        }
    }
} //Actualiza citas o elimina usuarios
else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // $photo = "";
    // if (sizeof($_FILES) > 0) {
    //     $tmp_name = $_FILES["image"]["tmp_name"];

    //     $photo = file_get_contents($tmp_name);
    //     // var_dump($tmp_name);
    //     // echo "Hola";
    // }
    if ($_POST["_method"] === "POST") {
        //Registro nuevo
        postNoticia($_POST["id"], $_POST["titulo"], $_POST["intro"], $_POST["sub1"], $_POST["con1"], $_POST["sub2"], $_POST["con2"], $_POST["sub2"], $_POST["con3"]);
    }else if ($_POST["_method"] === "PUT") {
        putNoticia($_POST["id"], $_POST["titulo"], $_POST["intro"], $_POST["sub1"], $_POST["con1"], $_POST["sub2"], $_POST["con2"], $_POST["sub2"], $_POST["con3"]);
    }
    else if (array_key_exists("id", $_POST)) {
        if ($_POST["_method"] === "DELETE") {
            deleteNoticia($_POST["id"]);
        }
    }
    exit();
}

function postNoticia($id_articulo, $titulo, $introduccion, $subtitulo1, $contenido1, $subtitulo2, $contenido2, $subtitulo3, $contenido3)
{
    global $connection;

    // $timestamp = date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);


    try {
        $query = $connection->prepare('INSERT INTO articulos VALUES(NULL, :titulo, :introduccion, :subtitulo1, :contenido1, :subtitulo2, :contenido2, :contenido3, :contenido3)'); //Se le cambia el nombre a cds, photocards, etc dependiendo
        $query->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $query->bindParam(':introduccion', $introduccion, PDO::PARAM_STR);
        $query->bindParam(':subtitulo1', $subtitulo1, PDO::PARAM_STR);
        $query->bindParam(':contenido1', $contenido1, PDO::PARAM_STR);
        $query->bindParam(':subtitulo2', $subtitulo2, PDO::PARAM_INT);
        $query->bindParam(':contenido2', $contenido2, PDO::PARAM_STR);
        $query->bindParam(':subtitulo3', $subtitulo3, PDO::PARAM_STR);
        $query->bindParam(':contenido3', $contenido3, PDO::PARAM_STR);

        $query->execute();

        if ($query->rowCount() === 0) {
            echo ("404: Error en la actualización");
        } else {
            header('Location: http://localhost/paginawebdb/view/blog.php');
        }
    } catch (PDOException $e) {
        echo $e;
    }
}



function putNoticia($id_articulo, $titulo, $introduccion, $subtitulo1, $contenido1, $subtitulo2, $contenido2, $subtitulo3, $contenido3)
{
    global $connection;

    try {
        $query = $connection->prepare('UPDATE articulos SET id_articulo = :id_articulo, titulo = :titulo, introduccion=:introduccion, subtitulo1=:subtitulo1, contenido1=:contenido1, subtitulo2=:subtitulo2, contenido2=:contenido2,subtitulo3=:subtitulo3, contenido3=:contenido3 WHERE id_articulo = :id_articulo');
        $query->bindParam(':id_articulo', $id_articulo, PDO::PARAM_INT);
        $query->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $query->bindParam(':introduccion', $introduccion, PDO::PARAM_STR);
        $query->bindParam(':subtitulo1', $subtitulo1, PDO::PARAM_STR);
        $query->bindParam(':contenido1', $contenido1, PDO::PARAM_STR);
        $query->bindParam(':subtitulo2', $subtitulo2, PDO::PARAM_STR);
        $query->bindParam(':contenido2', $contenido2, PDO::PARAM_STR);
        $query->bindParam(':subtitulo3', $subtitulo3, PDO::PARAM_STR);
        $query->bindParam(':contenido3', $contenido3, PDO::PARAM_STR);

        $query->execute();

        if ($query->rowCount() === 0) {
            echo ("404: Error en la actualización");
        } else {
            header('Location: http://localhost/paginawebdb/view/blog.php');
        }
    } catch (PDOException $e) {
        echo $e;
    }
}

function deleteNoticia($id){
    global $connection;

    try{
        $query = $connection->prepare('DELETE FROM articulos WHERE id_articulo= :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();

        if($query->rowCount() === 0){
            echo("404: Error en la eliminación");
        }
        else{
            header('Location: http://localhost/paginawebdb/view/blog.php');
        }
    }
    catch(PDOException $e){
        echo $e;
    }
}