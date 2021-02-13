<?php

namespace Controller;

use Model\CategoriaModel;
use Model\TarefaModel;
use Model\VO\TarefaVO;

use Embed\Embed;

final class TarefaController extends Controller 
{

    public function selectAll() 
    {
        $model = new TarefaModel();
        $data = $model->selectAll();

        $this->loadView("listaTarefas", [
            "tarefas" => $data
        ]);
    }

    public function selectOne() 
    {
        $id = $_GET["id"] ?? 0;

        if(empty($id)) 
        {
            $vo = new TarefaVO();
        } else 
        {
            $model = new TarefaModel();
            $vo = $model->selectOne($id);
        }

        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->selectAll();

        if(!isset($vo)) 
        {
            die("Registro não existe!");
        }

        $this->loadView("formTarefa", [
            "tarefa" => $vo,
            "categorias" => $categorias
        ]);
    }

    public function save() 
    {
        $id = $_POST["id"];
        $model = new TarefaModel();
        $vo = new TarefaVO($_POST["id"], $_POST["nome"], $_POST["descricao"], $_POST["data_abertura"], $_POST["prazo"], $_POST["status_entrega"], $_POST["id_categoria"]);

        if(empty($id)) 
        {
            $return = $model->insert($vo);
        } else 
        {
            $return = $model->update($vo);
        }

        $this->redirect("tarefas.php");
    }

    public function delete() 
    {
        if(empty($_GET["id"])) 
        {
            die("Necessário parrar o ID!");
        } 

        $model = new TarefaModel();
        $return = $model->delete($_GET["id"]);

        $this->redirect("tarefas.php");
    }

}