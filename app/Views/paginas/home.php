<div class="container p-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-5"><?=APP_NOME ?></h1>
            <a href="<?= URL ?>/paginas/cadastrar" class="btn btn-primary float-right mb-5">Cadastrar Tarefa</a>
        </div>
        
        <div class="col-md-12">
            
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Observação</th>
                        <th>Data de Entrega</th>
                        <th>Nível da Tarefa</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($dados['tarefas'] as $tarefas): ?>
                    <tr>
                        <td><?= $tarefas->id ?></td>
                        <td><?= $tarefas->titulo_tarefa ?></td>
                        <td><?= $tarefas->descricao_tarefa ?></td>
                        <td><?= $tarefas->data_tarefa ?></td>
                        <td><?= $tarefas->nivel ?></td>
                        <td>
                            <form name="concluirTarefa" method="POST" action="<?= URL . '/paginas/concluirTarefa/' . $tarefas->id ?>">
                                <input type="submit" class="btn btn-success" value="Concluir Tarefa">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Observação</th>
                        <th>Data de Entrega</th>
                        <th>Nível da Tarefa</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
            </table>
            
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#example').DataTable();
</script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>