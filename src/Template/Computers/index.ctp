<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Computer[]|\Cake\Collection\CollectionInterface $computers
 */
?>
<br>
<div>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#">Client location details</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Users</a>
    <div class="dropdown-menu">
      <a><?= $this->Html->link(__('List'), ['controller' => 'Users','action' => 'index'], array('class' => 'dropdown-item')); ?></a>
      <a><?= $this->Html->link(__('New User'), ['controller' => 'Users','action' => 'add'], array('class' => 'dropdown-item')); ?></a>
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
<div>
    <h3><?= __('Computers') ?></h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('model') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cond') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($computers as $computer): ?> 
            <tr class="table-light">
                <td><?= $this->Number->format($computer->id) ?></td>
                <td><?= $computer->has('location') ? $this->Html->link($computer->location->name, ['controller' => 'Locations', 'action' => 'view', $computer->location->id]) : '' ?></td>
                <td><?= h($computer->model) ?></td>
                <td><?= h($computer->cond) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $computer->id], array('class' => 'btn btn-info')); ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $computer->id], array('class' => 'btn btn-warning')); ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $computer->id], array('class' => 'btn btn-danger'), ['confirm' => __('Are you sure you want to delete # {0}?', $computer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
