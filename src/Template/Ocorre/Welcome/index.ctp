<h2>Bem vindo <?php echo $servidor['nome']; ?></h2>
<li class="list-group"><?= $this->Html->link(__('Sair'), ['controller' => 'Servidores','action' => 'logout']) ?></li>
