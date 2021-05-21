<?php
    $conexion = new mysqli('localhost', 'root', '', 'nombre');

    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO t_nombre (nombre) VALUES (?)";
    $query = $conexion -> prepare($sql);

    $query->bind_param('s', $nombre);

    $respuesta = $query -> execute();
    echo $nombre;
?>