<?php
    $this->layout('main', ['title' => 'Criticas - Ficha']); 
    echo "<b>Medio: </b>" . $critica['medio'] . "<br />";
    echo "<b>Puntuación: </b>" . $critica['puntuacion'] . "<br />";
    echo "<b>Crítica: </b>" . $critica['critica'] . "<br />";
?>
