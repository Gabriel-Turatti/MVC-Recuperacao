<?php

namespace Model;

use Model\VO\TarefaVO;
use Util\Database;

final class TarefaModel extends Model 
{

    public function selectAll() {
        $db = new Database();
        $query = "SELECT t.*, c.nome AS categoria FROM tarefas t LEFT JOIN categorias c ON c.id = t.id_categoria ";
        $data = $db->select($query);

        $arrTarefas = [];

        foreach($data as $row) 
        {
            array_push($arrTarefas, new TarefaVO($row["id"], $row["nome"], $row["descricao"], $row["data_abertura"], $row["prazo"], $row["status_entrega"], $row["id_categoria"], $row["categoria"]));
        }

        return $arrTarefas;
    }

    public function selectOne($id) 
    {
        $db = new Database();
        $query = "SELECT * FROM tarefas WHERE id = :id";
        $binds = [":id" => $id];
        $data = $db->select($query, $binds);

        if(count($data) == 0) 
        {
            return null;
        }

        $tarefa = new TarefaVO($data[0]["id"], $data[0]["nome"], $data[0]["descricao"], $data[0]["data_abertura"], $data[0]["prazo"], $data[0]["status_entrega"], $data[0]["id_categoria"]);
        return $tarefa;
    }

    public function insert($vo) 
    {
        $db = new Database();
        $query = "INSERT INTO tarefas (nome, descricao, data_abertura, prazo, status_entrega, id_categoria) VALUES (:nome, :descricao, :data_abertura, :prazo, :status_entrega, :idCategoria)";
        $binds = [
            ":nome" => $vo->getNome(), 
            ":descricao" => $vo->getDescricao(), 
            ":data_abertura" => $vo->getDataAbertura(),
            ":prazo" => $vo->getPrazo(),
            ":status_entrega" => $vo->getStatusEntrega(),
            ":idCategoria" => $vo->getIdCategoria()
        ];

        $success = $db->execute($query, $binds);

        if($success) 
        {
            return $db->getLastInsertedId();
        } 
        
        return null;
    }

    public function update($vo) 
    {
        $db = new Database();
        $query = "UPDATE tarefas SET nome = :nome, descricao = :descricao, data_abertura = :data_abertura, prazo = :prazo, status_entrega = :status_entrega, id_categoria = :idCategoria WHERE id = :id";
        $binds = [
            ":nome" => $vo->getNome(), 
            ":descricao" => $vo->getDescricao(), 
            ":data_abertura" => $vo->getDataAbertura(),
            ":prazo" => $vo->getPrazo(),
            ":status_entrega" => $vo->getStatusEntrega(),
            ":idCategoria" => $vo->getIdCategoria(),
            ":id" => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($id) 
    {
        $db = new Database();
        $query = "DELETE FROM tarefas WHERE id = :id";
        $binds = [":id" => $id];

        return $db->execute($query, $binds);
    }

}