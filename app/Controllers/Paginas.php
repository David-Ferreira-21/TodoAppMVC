<?php

class Paginas extends Controller {

    public function __construct()
    {
        $this->listaTarefaModel = $this->model('ListaTarefa');
    }

    public function index(){
        $dados = [
            'tarefas' => $this->listaTarefaModel->listarTodos()
        ];

        $this->view('paginas/home', $dados);
    }

    //Página de Cadastro de Tarefas
    public function cadastrar(){
        $dados = [
            'tarefas' => "Página de Cadastro"
        ];

        $this->view('paginas/cadastrar', $dados);
    }

    public function cadastrarTarefa(){

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (isset($formulario)) :
            $dados = [
                'titulo_tarefa' => trim($formulario['titulo_tarefa']),
                'descricao_tarefa' => trim($formulario['descricao_tarefa']),
                'data_tarefa' => trim($formulario['data_tarefa']),
                'nivel' => trim($formulario['nivel']),
            ];

            if (!in_array("", $formulario)) :
                if ($this->listaTarefaModel->cadastrarTarefa($dados)) :
                    Sessao::mensagem('home', 'Cadastro realizado com sucesso');
                    URL::redirecionar('paginas/home');
                else :
                    die("Erro ao armazenar tarefa no banco de dados");
                endif;
            endif;
        else:
            $dados = [
                'titulo_tarefa' => '',
                'descricao_tarefa' => '',
                'data_tarefa' => '',
                'nivel' => '',
            ];
        endif;

        $this->view('paginas/cadastrar', $dados);
    }

    //Página de Conclusão de Tarefas
    public function concluirTarefa($id){

        $id = (int) $id;
            
        if(is_int($id)):
            if ($this->listaTarefaModel->tarefaConcluida($id)):
                Sessao::mensagem('home', 'Tarefa concluída com sucesso!');
                URL::redirecionar('paginas/home');
            else:
                die('Erro ao concluir tarefa');
            endif;
        endif;

        $this->view('paginas/home', $dados);
    }

    //Página de Conclusão de Tarefas
    public function tarefasConcluidas(){
        $dados = [
            'tarefas' => $this->listaTarefaModel->tarefasConcluidas()
        ];

        $this->view('paginas/tarefasConcluidas', $dados);
    }

    public function excluirTarefa($id){

        $id = (int) $id;
            
        if(is_int($id)):
            if ($this->listaTarefaModel->deleteTarefa($id)):
                Sessao::mensagem('tarefasConcluidas', 'Tarefa excluída com sucesso!');
                URL::redirecionar('paginas/tarefasConcluidas');
            else:
                die('Erro ao excluir tarefa');
            endif;
        endif;

        $this->view('paginas/tarefasConcluidas', $dados);
    }

}