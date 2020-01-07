<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Aluno</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Listar'), ['controller' => 'Alunos', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($aluno) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome</label>
        <?= $this->Form->control('nome', ['class' =>'form-control','placeholder'=>'Nome completo','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Curso</label>
        <?= $this->Form->control('curso_id', ['class' =>'form-control','placeholder'=>'Curso','label' => false]) ?>
    </div>
</div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(_('Cadastrar'), ['class'=>'btn btn-success']) ?>

<?= $this->Form->end() ?>