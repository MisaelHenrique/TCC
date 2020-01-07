<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia $ocorrencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ocorrencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Alunos'), ['controller' => 'Alunos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Alunos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Servidores'), ['controller' => 'Servidores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servidore'), ['controller' => 'Servidores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Ocorrencias'), ['controller' => 'TipoOcorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Ocorrencia'), ['controller' => 'TipoOcorrencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gravidades'), ['controller' => 'Gravidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gravidade'), ['controller' => 'Gravidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Turnos'), ['controller' => 'Turnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Turno'), ['controller' => 'Turnos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medidas'), ['controller' => 'Medidas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medida'), ['controller' => 'Medidas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ocorrencias form large-9 medium-8 columns content">
    <?= $this->Form->create($ocorrencia) ?>
    <fieldset>
        <legend><?= __('Edit Ocorrencia') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('data');
            echo $this->Form->control('aluno_id', ['options' => $alunos]);
            echo $this->Form->control('servidore_id', ['options' => $servidores]);
            echo $this->Form->control('tipo_ocorrencia_id', ['options' => $tipoOcorrencias]);
            echo $this->Form->control('gravidade_id', ['options' => $gravidades]);
            echo $this->Form->control('turno_id', ['options' => $turnos]);
            echo $this->Form->control('medida_id', ['options' => $medidas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
