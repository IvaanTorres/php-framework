<?php 
    $this->layout('main', ['title' => 'Peliculas']) 
?>
<ul class="list-group row">
<?php
foreach ($criticas as $critica) {
    echo '<li class="list-group-item d-flex justify-content-between 
        align-items-center">';
    echo '<span class="col-9">'.$critica['medio'] . '</span>';
    echo '<a href="' . $_ENV['APP_URL'] . '/criticas/' . $critica['id'] . 
        '" class="btn btn-success">Ver</a>';
    echo '<a href="' . $_ENV['APP_URL']  . '/peliculas/' . $id_pelicula . 
        '/criticas/editar/' . $critica['id'] .
        '" class="btn btn-info">Editar</a>';
    //Formulario donde el método es DELETE, por tanto al pulsar en el boton, se llamará al método DELETE
    echo '<form action="' . $_ENV['APP_URL'] . '/peliculas/' . $id_pelicula . 
        '/criticas/' . $critica['id'] . 
        '" method="post">';
    echo '<input type="hidden" name="_method" value="delete" />';
    echo '<button type="submit" class="btn btn-danger">Borrar</button>';
    echo '</form>';
    echo '</li>';
} 
?>
</ul>
<br><br>
<a href="<?=$_ENV['APP_URL']?>/peliculas/<?=$id_pelicula?>/criticas/insertar" class="btn btn-primary">Añadir</a>