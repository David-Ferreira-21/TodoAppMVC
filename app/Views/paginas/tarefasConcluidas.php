<div class="container p-5">
	<div class="row">
		<div class="col-md-12">
			<h1>Tarefas Concluídas</h1>
			<?= Sessao::mensagem('tarefasConcluidas') ?>
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
                <tbody class="bg-success text-white">
                    <?php foreach($dados['tarefas'] as $tarefas): ?>
                    <tr>
                        <td><?= $tarefas->id ?></td>
                        <td><?= $tarefas->titulo_tarefa ?></td>
                        <td><?= $tarefas->descricao_tarefa ?></td>
                        <td><?= $tarefas->data_tarefa ?></td>
                        <td><?= $tarefas->nivel ?></td>
                        <td>
                        	<form method="POST" action="<?= URL . '/paginas/excluirTarefa/' . $tarefas->id ?>">
                            	<input type="submit" class="btn btn-danger" value="Excluir Tarefa">
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