<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Servidor</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Servidores', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm'])?>
            <?= $this->Html->link(_('Editar'), ['controller' => 'Servidores', 'action' => 'edit', $servidore->id], ['class'=>'btn btn-outline-warning btn-sm'])?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Servidores', 'action' => 'delete', $servidore->id], ['class'=>'btn btn-outline-danger btn-sm','confirm' => __('Deseja realmente apagar o usuário # {0}?', $servidore->id)]) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Servidores', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Editar'), ['controller' => 'Servidores', 'action' => 'edit', $servidore->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Servidores', 'action' => 'delete', $servidore->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar o usuário # {0}?', $servidore->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<dl class="row">
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($servidore->id) ?></dd>

    <dt class="col-sm-3">Nome do servidor</dt>
    <dd class="col-sm-9"><?= h($servidore->nome) ?></dd>

    <dt class="col-sm-3">SIAPE</dt>
    <dd class="col-sm-9"><?= h($servidore->siape) ?></dd>

    <dt class="col-sm-3">Cargo</dt>
    <dd class="col-sm-9"><?= h($servidore->cargo) ?></dd>

    <dt class="col-sm-3">Email</dt>
    <dd class="col-sm-9"><?= h($servidore->email) ?></dd>

    <dt class="col-sm-3 text-truncate">Data do Cadastro</dt>
    <dd class="col-sm-9"><?= h($servidore->created) ?></dd>

    <dt class="col-sm-3 text-truncate">Alterado em </dt>
    <dd class="col-sm-9"><?= h($servidore->modified) ?></dd>

</dl>