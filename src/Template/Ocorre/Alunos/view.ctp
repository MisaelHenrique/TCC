<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Aluno</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Alunos', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm'])?>
            <?= $this->Html->link(_('Editar'), ['controller' => 'Alunos', 'action' => 'edit', $aluno->id], ['class'=>'btn btn-outline-warning btn-sm'])?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $aluno->id], ['class'=>'btn btn-outline-danger btn-sm','confirm' => __('Deseja realmente apagar o usuário # {0}?', $aluno->id)]) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Alunos', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Editar'), ['controller' => 'Alunos', 'action' => 'edit', $aluno->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $aluno->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar o usuário # {0}?', $aluno->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<dl class="row">
<dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($aluno->id) ?></dd>

    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= h($aluno->nome) ?></dd>
    <dt class="col-sm-3">Curso</dt>
    <dd class="col-sm-9"><?= h($aluno->curso->nome) ?></dd>

</dl>

<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Ocorrencias relacionadas</h2>
    </div>
    <?php if (!empty($aluno->ocorrencias)): ?>
    <div class="p-2">
    <?php foreach ($aluno->ocorrencias as $ocorrencia): ?>
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm'])?>
            <?= $this->Html->link(_('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencia->id], ['class'=>'btn btn-outline-warning btn-sm'])?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class'=>'btn btn-outline-danger btn-sm','confirm' => __('Deseja realmente apagar o usuário # {0}?', $ocorrencia->id)]) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencia->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar o usuário # {0}?', $ocorrencia->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<dl class="row">
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($ocorrencia->id) ?></dd>

    <dt class="col-sm-3">Nome do aluno</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->aluno_id) ?></dd>

    <dt class="col-sm-3">Curso</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->aluno_id->curso_id) ?></dd>

    <dt class="col-sm-3">Tipo Ocorrencia </dt>
    <dd class="col-sm-9"><?= h($ocorrencia->tipo_ocorrencia_id) ?></dd>

    <dt class="col-sm-3">Gravidade</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->gravidade_id) ?></dd>

    <dt class="col-sm-3">Turno Ocorrido</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->turno_id) ?></dd>

    <dt class="col-sm-3">Medida aplicada</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->medida_id) ?></dd>
    
    <dt class="col-sm-3 text-truncate">Data do ocorrido</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->data) ?></dd>

    <dt class="col-sm-3 text-truncate">Data do cadastro</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->created) ?></dd>

    <dt class="col-sm-3">Descrição</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->descricao) ?></dd>
    <?php endforeach; ?>
    <?php endif; ?>
</dl>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>

<div class="alunos view large-9 medium-8 columns content">
    <div class="related">
        <h4><?= __('Related Ocorrencias') ?></h4>
        <?php if (!empty($aluno->ocorrencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Aluno Id') ?></th>
                <th scope="col"><?= __('Servidore Id') ?></th>
                <th scope="col"><?= __('Tipo Ocorrencia Id') ?></th>
                <th scope="col"><?= __('Gravidade Id') ?></th>
                <th scope="col"><?= __('Turno Id') ?></th>
                <th scope="col"><?= __('Medida Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aluno->ocorrencias as $ocorrencias): ?>
            <tr>
                <td><?= h($ocorrencias->id) ?></td>
                <td><?= h($ocorrencias->descricao) ?></td>
                <td><?= h($ocorrencias->data) ?></td>
                <td><?= h($ocorrencias->created) ?></td>
                <td><?= h($ocorrencias->aluno_id->aluno) ?></td>
                <td><?= h($ocorrencias->servidore_id) ?></td>
                <td><?= h($ocorrencias->tipo_ocorrencia_id) ?></td>
                <td><?= h($ocorrencias->gravidade_id) ?></td>
                <td><?= h($ocorrencias->turno_id) ?></td>
                <td><?= h($ocorrencias->medida_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
