<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title><?= $this->e($title) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/estilos.css">
</head>

<body>
    <div class="alert alert-secondary d-flex">
        <a href="<?=$_ENV['APP_URL'] . '/peliculas'?>" class="btn btn-dark" style="margin-right: 10px;">Peliculas</a>
        <a href="<?=$_ENV['APP_URL'] . '/criticas'?>" class="btn btn-dark">Críticas</a>
    </div>
    <div class="container">
        <?=$this->section('content')?>
    </div>
</body>

</html>