<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoOcorrencia $tipoOcorrencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Ocorrencia'), ['action' => 'edit', $tipoOcorrencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Ocorrencia'), ['action' => 'delete', $tipoOcorrencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoOcorrencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Ocorrencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Ocorrencia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoOcorrencias view large-9 medium-8 columns content">
    <h3><?= h($tipoOcorrencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Ocorrencia') ?></th>
            <td><?= h($tipoOcorrencia->tipo_ocorrencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipoOcorrencia->id) ?></td>
        </tr>
    </table>
</div>
