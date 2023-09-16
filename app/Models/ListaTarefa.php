<?php

class ListaTarefa
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function listarTodos(){
        $this->db->query("SELECT * FROM tarefas WHERE status = 2 order by tarefas.id desc ");
        return $this->db->resultados();
    }

    public function listarPreCadastro(){
        $this->db->query("SELECT * FROM tarefas WHERE status = 1 order by tarefas.id desc ");
        return $this->db->resultados();
    }

    public function cadastrarTarefa($dados){
        $this->db->query("INSERT INTO tarefas(titulo_tarefa, descricao_tarefa, data_tarefa, nivel, status) VALUES (:titulo_tarefa, :descricao_tarefa, :data_tarefa, :nivel, 2)");

        $this->db->bind("titulo_tarefa", $dados['titulo_tarefa']);
        $this->db->bind("descricao_tarefa", $dados['descricao_tarefa']);
        $this->db->bind("data_tarefa", $dados['data_tarefa']);
        $this->db->bind("nivel", $dados['nivel']);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function tarefaConcluida($id){
        $this->db->query("UPDATE tarefas SET status = 3 WHERE id = :id ");

        $this->db->bind("id", $id);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function tarefasConcluidas(){
        $this->db->query("SELECT * FROM tarefas WHERE status = 3 order by tarefas.id desc ");
        return $this->db->resultados();
    }

    public function deleteTarefa($id){
        $this->db->query("DELETE FROM tarefas WHERE id = :id ");

        $this->db->bind("id", $id);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

}
