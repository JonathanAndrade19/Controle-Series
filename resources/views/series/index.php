<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Series</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="container-fluid py-5" style="background-color: #e9ecef; margin-top: 1rem; margin-bottom: 1rem; border-radius: 0.5rem;">
            <h1>Séries</h1>
        </div>

        <a href="#" class="btn btn-dark mb-2">Adicionar</a>

        <ul class="list-group">
            <?php foreach ($series as $serie): ?>
                <li class="list-group-item"> <?= $serie; ?> </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>