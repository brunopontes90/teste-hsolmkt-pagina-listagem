<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Listagem</title>
</head>

<body class="container">
    <h1 class="text-center">Listagem</h1>
    <?php
    $url = 'https://jsonplaceholder.typicode.com/todos';
    $curl =  curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resultado = json_decode(curl_exec($curl));
    ?>

    <table class="table">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Completo</th>
            </tr>
        </thead>
        <?php foreach ($resultado as $value) { ?>
            <tbody class="text-center">
                <tr>
                    <th scope="row"><?= $value->id ?></th>
                    <td><?= $value->title ?></td>
                    <td><?= $value->completed == false ? "Não" : "Sim" ?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>

</body>

</html>