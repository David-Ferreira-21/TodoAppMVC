<div class="container p-5">
	<div class="row">
		<div class="col-md-12">
			<h1>Cadastrar Nova Tarefa</h1>
		</div>
		<div class="col-md-12">
			<form name="cadastrarTarefa" method="POST" action="<?= URL ?>/paginas/cadastrarTarefa" class="mt-4">
				<div class="form-row">
					<label class="mt-4">Título da Tarefa</label>
					<input type="text" name="titulo_tarefa" class="form-control" placeholder="Digite um título">
					<label class="mt-4">Descrição da Tarefa</label>
					<textarea name="descricao_tarefa" class="form-control" placeholder="Digite uma descrição"></textarea>
					<div class="col">
						<label class="mt-4">Título da Tarefa</label>
						<input type="date" name="data_tarefa" class="form-control" placeholder="Digite um título">
					</div>
					<div class="col">
						<label class="mt-4">Descrição da Tarefa</label>
						<select name="nivel" class="form-control">
							<option>Insira um Nível</option>
							<option value="Urgente">Urgente</option>
							<option value="Atrasado">Atrasado</option>
							<option value="Pendente">Pendente</option>
						</select>
					</div>
				</div>
				<input type="submit" value="Cadastrar Tarefa" class="btn btn-primary mt-3">
			</form>
		</div>
	</div>
</div>