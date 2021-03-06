<?php
    $this->layout('main', ['title' => 'Película - Ficha']); 

    echo "<b>Título: </b>" . $info['titulo'] . "<br />";
    echo "<b>Año: </b>" . $info['anyo'] . "<br />";
    echo "<b>Duración: </b>" . $info['duracion'] . "<br />";
    echo "<b>Dirección: </b><br />";
    foreach ($directores as $director) {
        echo "<a href='" . $_ENV['APP_URL'] . "/directores/"  . $director['id'] 
            . "'><li>" . $director['nombre'] . "</li></a>";
    }
    echo "<b>Actores: </b><br />";
    foreach ($actores as $actor) {
        echo "<a href='" . $_ENV['APP_URL'] . "/actores/" . $actor['id'] 
            . "'><li>" . $actor['nombre'] . "</li></a>";
    }

    echo "<br /><b>Críticas: </b><br /><br />";
    foreach ($criticas as $critica) {
        echo "<b>Medio: </b>" . $critica['medio'] . "<br />";
        echo "<b>Puntuación: </b>" . $critica['puntuacion'] . "<br />";
        echo "<b>Crítica: </b>" . $critica['critica'] . "<br />";
        echo "<br /><br />";
    }

?>
