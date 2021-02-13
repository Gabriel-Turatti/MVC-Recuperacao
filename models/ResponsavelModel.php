<?php

namespace Model;

use Model\VO\ResponsavelVO;
use Util\Database;

final class ResponsavelModel extends Model 
{

    public function selectAll() {
        $db = new Database();
        $query = "SELECT * FROM responsaveis";
        $data = $db->select($query);

        $arrResponsaveis = [];

        foreach($data as $row) 
        {
            array_push($arrResponsaveis, new ResponsavelVO($row["id"], $row["nome"], $row["email"]));
        }

        return $arrResponsaveis;
    }

    public function selectOne($id) 
    {
        $db = new Database();
        $query = "SELECT * FROM responsaveis WHERE id = :id";
        $binds = [":id" => $id];
        $data = $db->select($query, $binds);

        if(count($data) == 0) 
        {
            return null;
        }

        $responsavel = new ResponsavelVO($data[0]["id"], $data[0]["nome"], $data[0]["email"]);
        return $responsavel;
    }

    public function insert($vo) 
    {
        $db = new Database();
        $query = "INSERT INTO responsaveis (nome, email) VALUES (:nome, :email)";
        $binds = [
            ":nome" => $vo->getNome(),
            ":email" => $vo->getEmail()
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
        $query = "UPDATE responsaveis SET nome = :nome, email = :email WHERE id = :id";
        $binds = [
            ":nome" => $vo->getNome(),
            ":email" => $vo->getEmail(), 
            ":id" => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($id) 
    {
        $db = new Database();
        $query = "DELETE FROM responsaveis WHERE id = :id";
        $binds = [":id" => $id];

        return $db->execute($query, $binds);
    }

}