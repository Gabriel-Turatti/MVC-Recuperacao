<?php

namespace Model\VO;

final class TarefaVO extends VO 
{

    private $nome;
    private $descricao;
    private $data_abertura;
    private $prazo;
    private $status_entrega;
    private $idCategoria;
    private $nomeCategoria;

    public function __construct($id = 0, $nome = "", $descricao = "", $data_abertura = "", $prazo = "", $status_entrega = "", $idCategoria = 0, $nomeCategoria = "") 
    {
        parent::__construct($id);
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->data_abertura = $data_abertura;
        $this->prazo = $prazo;
        $this->status_entrega = $status_entrega;
        $this->idCategoria = $idCategoria;
        $this->nomeCategoria = $nomeCategoria;
    }

    public function getStatusEntrega() 
    {
        return $this->status_entrega;
    }

    public function setStatusEntrega($status_entrega) 
    {
        $this->status_entrega = $status_entrega;
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function setNome($nome) 
    {
        $this->nome = $nome;
    }

    public function getDescricao() 
    {
        return $this->descricao;
    }

    public function setDescricao($descricao) 
    {
        $this->descricao = $descricao;
    }

    public function getDataAbertura() 
    {
        return $this->data_abertura;
    }

    public function setDataAbertura($data_abertura) 
    {
        $this->data_abertura = $data_abertura;
    }

    public function getPrazo() 
    {
        return $this->prazo;
    }

    public function setPrazo($prazo) 
    {
        $this->prazo = $prazo;
    }

    public function getIdCategoria() 
    {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria) 
    {
        $this->idCategoria = $idCategoria;
    }

    public function getNomeCategoria() 
    {
        return $this->nomeCategoria;
    }

    public function setNomeCategoria($nomeCategoria) 
    {
        $this->nomeCategoria = $nomeCategoria;
    }

}