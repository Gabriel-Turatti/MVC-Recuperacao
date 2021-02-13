<?php

namespace Controller;

use Model\ResponsavelModel;
use Model\VO\ResponsavelVO;

final class ResponsavelController extends Controller 
{

    public function selectAll() 
    {
        $model = new ResponsavelModel();
        $data = $model->selectAll();

        $this->loadView("listaResponsaveis", [
            "responsaveis" => $data
        ]);
    }

    public function selectOne() 
    {
        $id = $_GET["id"] ?? 0;

        if(empty($id)) 
        {
            $vo = new ResponsavelVO();
        } else 
        {
            $model = new ResponsavelModel();
            $vo = $model->selectOne($id);
        }

        if(!isset($vo)) 
        {
            die("Registro não existe!");
        }

        $this->loadView("formResponsavel", [
            "responsavel" => $vo
        ]);
    }

    public function save() 
    {
        $id = $_POST["id"];
        $model = new ResponsavelModel();
        $vo = new ResponsavelVO($_POST["id"], $_POST["nome"], $_POST["email"]);

        if(empty($id)) 
        {
            $return = $model->insert($vo);
        } else 
        {
            $return = $model->update($vo);
        }

        $this->redirect("Responsaveis.php");
    }

    public function delete() 
    {
        if(empty($_GET["id"])) 
        {
            die("Necessário passar o ID!");
        } 

        $model = new ResponsavelModel();
        $return = $model->delete($_GET["id"]);

        $this->redirect("responsaveis.php");
    }

}