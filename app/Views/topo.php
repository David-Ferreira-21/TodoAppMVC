<header class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <a class="navbar-brand" href="<?= URL ?>">Lista de Tarefas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>" data-tooltip="tooltip" title="Página Inicial">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>/paginas/cadastrar" data-tooltip="tooltip" title="Cadastrar Tarefa">Cadastrar Tarefa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>/paginas/tarefasConcluidas" data-tooltip="tooltip" title="Tarefas Concluídas">Tarefas Concluídas</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</header>