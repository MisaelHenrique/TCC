<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cursos</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Cadastrar'), ['controller' => 'Cursos', 'action' => 'add'], ['class'=>'btn btn-outline-success btn-sm']);?>
    </div>
</div>

<?= $this->Flash->render() ?>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Curso</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $curso): ?>
            <tr>
                <td><?= $this->Number->format($curso->id) ?></td>
                <td><?= h($curso->nome) ?></td>
                <td>
                    <span class="d-none d-md-block">
                        <?= $this->Html->link(__('Visualizar'), ['controller' => 'Cursos', 'action' => 'view', $curso->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

                        <?= $this->Html->link(__('Editar'), ['controller' => 'Cursos', 'action' => 'edit', $curso->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>

                        <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Cursos', 'action' => 'delete', $curso->id], ['class' =>'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja apagar o usuário # {0}?', $curso->id)]) ?>
                    </span>

                    <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ações
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'Cursos', 'action' => 'view', $curso->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Html->link(__('Editar'), ['controller' => 'Cursos', 'action' => 'edit', $curso->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Cursos', 'action' => 'delete', $curso->id], ['class' =>'dropdown-item', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $curso->id)]) ?>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('pagination'); ?>
</div>