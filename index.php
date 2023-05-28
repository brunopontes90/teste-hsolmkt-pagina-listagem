<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Listagem</title>
</head>

<body class="container">
    <?php
    include_once './api/Api.php';
    $conexao = new Api();
    $resultado = $conexao->ConexaoApi();
    ?>

    <h1 class="text-center">Listagem</h1>
    <table class="table table-dark">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Completo</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <?php foreach ($resultado as $value) { ?>
            <tbody class="text-center">
                <tr>
                    <th scope="row"><?= $value->id ?></th>
                    <td><?= $value->title ?></td>
                    <td><?= $value->completed == false ? "Não" : "Sim" ?></td>
                    <td>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                            Editar
                        </button>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <form class="" method="POST" action="">
                            <div class="form-group">
                                <label class="label">Titulo:</label>
                                <input class="form-control" type="text" name="titulo" id="titulo" value="<?= $value->title ?>" placeholder="Nome Completo" required />
                            </div>
                            <div class="form-group">
                                <label class="label">Completo:</label>
                                <input class="form-control" type="text" name="completo" id="completo" value="<?= $value->completed == false ? "0" : "1" ?>" placeholder="Digite seu email" required />
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>