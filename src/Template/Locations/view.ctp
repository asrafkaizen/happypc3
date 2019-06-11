<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location $location
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Computers'), ['controller' => 'Computers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Computer'), ['controller' => 'Computers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locations view large-9 medium-8 columns content">
    <h3><?= h($location->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($location->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Map') ?></th>
            <td><?= h($location->map) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($location->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($location->phone) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Computers') ?></h4>
        <?php if (!empty($location->computers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Location Id') ?></th>
                <th scope="col"><?= __('Model') ?></th>
                <th scope="col"><?= __('Cond') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($location->computers as $computers): ?>
            <tr>
                <td><?= h($computers->id) ?></td>
                <td><?= h($computers->location_id) ?></td>
                <td><?= h($computers->model) ?></td>
                <td><?= h($computers->cond) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Computers', 'action' => 'view', $computers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Computers', 'action' => 'edit', $computers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Computers', 'action' => 'delete', $computers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $computers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Shifts') ?></h4>
        <?php if (!empty($location->shifts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Location Id') ?></th>
                <th scope="col"><?= __('Bill Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($location->shifts as $shifts): ?>
            <tr>
                <td><?= h($shifts->user_id) ?></td>
                <td><?= h($shifts->location_id) ?></td>
                <td><?= h($shifts->bill_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Shifts', 'action' => 'view', $shifts->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Shifts', 'action' => 'edit', $shifts->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Shifts', 'action' => 'delete', $shifts->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shifts->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
