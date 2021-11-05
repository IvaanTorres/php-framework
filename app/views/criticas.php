<?php 
    $this->layout('main', ['title' => 'Peliculas']) 
?>
<ul class="list-group row">
<?php
foreach ($peliculas as $pelicula) {
    echo '<li class="list-group-item d-flex justify-content-between 
        align-items-center">';
    echo '<span class="col-9">'.$pelicula['titulo'] . '</span>';
    echo '<a href="' . $_ENV['APP_URL'] . '/peliculas/' . $pelicula['id'] .
    '/criticas" class="btn btn-success">Ver Criticas</a>';
    echo '</li>';
} 
?>
</ul>