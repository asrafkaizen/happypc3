<?php 
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<br>
<div>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#">List of user</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Users</a>
    <div class="dropdown-menu">
      <a><?= $this->Html->link(__('List'), ['action' => 'index'], array('class' => 'dropdown-item')); ?></a>
      <a><?= $this->Html->link(__('New User'), ['action' => 'add'], array('class' => 'dropdown-item')); ?></a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Shifts</a>
    <div class="dropdown-menu">
      <a><?= $this->Html->link(__('List'), ['controller' => 'Shifts', 'action' => 'index'], array('class' => 'dropdown-item')); ?></a>
      <a><?= $this->Html->link(__('Add New'), ['controller' => 'Shifts', 'action' => 'add'], array('class' => 'dropdown-item')); ?></a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Computers</a>
    <div class="dropdown-menu">
      <a><?= $this->Html->link(__('List'), ['controller' => 'Computers', 'action' => 'index'], array('class' => 'dropdown-item')); ?></a>
      <a><?= $this->Html->link(__('Add New'), ['controller' => 'Computers', 'action' => 'add'], array('class' => 'dropdown-item')); ?></a>
    </div>
  </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Clients</a>
    <div class="dropdown-menu">
      <a><?= $this->Html->link(__('List'), ['controller' => 'Locations', 'action' => 'index'], array('class' => 'dropdown-item')); ?></a>
      <a><?= $this->Html->link(__('Add New'), ['controller' => 'Locations', 'action' => 'add'], array('class' => 'dropdown-item')); ?></a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
<br>
    <h3><?= __('Users') ?></h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><a><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mxid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('password') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col" class="actions" colspan="3" ><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr class="table-light">
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $this->Number->format($user->mxid) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->email) ?></td>
                <!--<td><?= h($user->password) ?></td>-->
                <td><?= h($user->phone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], array('class' => 'btn btn-info')); ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], array('class' => 'btn btn-warning')); ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], array('class' => 'btn btn-danger'), ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div>
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <li class="page-item disabled"><?= $this->Paginator->prev('< ' . __('previous')) ?></li>
            <li class="page-item active"><?= $this->Paginator->numbers() ?></li>
            <li class="page-item"><?= $this->Paginator->next(__('next') . ' >') ?></li>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>