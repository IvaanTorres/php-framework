<?php
$this->layout('main', ['title' => 'Criticas - Insertar']);
?>
<form action="<?= $_ENV['APP_URL'] ?>/peliculas/<?= $id_pelicula ?>/criticas" method="post">
    <input type="hidden" value=<?= $id_pelicula ?> name="id_pelicula">
    <div class="form-group">
        <label for="medio">Medio:</label>
        <input type="text" class="form-control" name="medio" placeholder="Medio..." />
    </div>
    <div class="form-group">
        <label for="puntuacion">Puntuación:</label>
        <input type="number" step='0.1' min='0' max='10' class="form-control" name="puntuacion" placeholder="Puntuación..." />
    </div>
    <div class="form-group">
        <label for="precio">Critica:</label>
        <textarea class="form-control" name="critica" placeholder="Crítica..."></textarea>
    </div>
    <button type="submit" class="btn btn-primary">
        Enviar
    </button>
</form>