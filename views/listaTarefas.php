<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Recuperação - Desenvolvimento de Sistemas para Internet</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Tarefas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="tarefas.php">Tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categorias.php">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="responsaveis.php">Responsaveis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="container mt-3">
        <div class="row">
            <div class="col-12">
                <a href="tarefa.php" class="btn btn-success float-right">Adicionar</a>
                <h1>Tarefas</h1>
            </div>
        </div>
    </header>
    <section class="container mt-3">
        <?php if(count($tarefas) == 0) { ?>
            <div class="col-10 offset-1 alert alert-info">Nenhum registro encontrado</div>
        <?php } else { ?>
        <div>
            <table class="table table-hover table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Data de Abertura</th>
                    <th>Prazo</th>
                    <th>Status de Entrega</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
                <?php foreach($tarefas as $tarefa) { ?>
                <tr>
                    <td><?php echo $tarefa->getId() ?></td>
                    <td><?php echo $tarefa->getNome() ?></td>
                    <td><?php echo $tarefa->getDescricao() ?></td>
                    <td><?php echo $tarefa->getDataAbertura() ?></td>
                    <td><?php echo $tarefa->getPrazo() ?></td>
                    <td><?php echo $tarefa->getStatusEntrega() ?></td>
                    <td><?php echo $tarefa->getNomeCategoria() ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="tarefa.php?id=<?php echo $tarefa->getId() ?>" class="btn btn-primary">Editar</a>
                            <a href="excluirTarefa.php?id=<?php echo $tarefa->getId() ?>" class="btn btn-danger">Excluir</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <?php } ?>
        </div>
    </section>
    <footer class="container mt-3">
        <div class="row">
            <div class="col-12">
                <p class="text-muted text-center">Desenvolvido por Gabriel Turatti Andrade &copy; 2021</p>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>