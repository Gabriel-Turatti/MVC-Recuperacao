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
                <h1>Tarefas</h1>
            </div>
        </div>
    </header>
    <section class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="salvarTarefa.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $tarefa->getId(); ?>">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $tarefa->getNome(); ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="data_abertura">Data de Abertura</label>
                            <input type="date" class="form-control" id="data_abertura" name="data_abertura" value="<?php echo $tarefa->getDataAbertura(); ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="prazo">Prazo (Quantos dias)</label>
                            <input type="number" class="form-control" id="prazo" name="prazo" value="<?php echo $tarefa->getPrazo(); ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="<?php echo $tarefa->getDescricao(); ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="status_entrega">Status de Entrega</label>
                            <select id="status_entrega" name="status_entrega" class="form-control">
                                <option value="" disabled>Selecione</option>
                                <option value="pendente" <?php echo ($tarefa->getStatusEntrega() == 'pendente') ? "selected" : "" ?>>Pendente</option>
                                <option value="andamento" <?php echo ($tarefa->getStatusEntrega() == 'andamento') ? "selected" : "" ?>>Em Andamento</option>
                                <option value="finalizada" <?php echo ($tarefa->getStatusEntrega() == 'finalizada') ? "selected" : "" ?>>Finalizada</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="id_categoria">Categoria</label>
                            <select id="id_categoria" name="id_categoria" class="form-control">
                                <option value="">Selecione</option>
                                <?php foreach($categorias as $categoria){ ?>
                                    <option 
                                        value="<?php echo $categoria->getId() ?>" 
                                        <?php echo ($categoria->getId() == $tarefa->getIdCategoria()) ? "selected" : "" ?>
                                    >
                                        <?php echo $categoria->getNome() ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="btn-group float-right">
                        <a href="tarefas.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
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