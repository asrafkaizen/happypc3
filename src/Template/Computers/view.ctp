<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Computer $computer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Computer'), ['action' => 'edit', $computer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Computer'), ['action' => 'delete', $computer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $computer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Computers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Computer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="computers view large-9 medium-8 columns content">
    <h3><?= h($computer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $computer->has('location') ? $this->Html->link($computer->location->name, ['controller' => 'Locations', 'action' => 'view', $computer->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($computer->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cond') ?></th>
            <td><?= h($computer->cond) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($computer->id) ?></td>
        </tr>
    </table>
</div>
