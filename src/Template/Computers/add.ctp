<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Computer $computer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Computers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="computers form large-9 medium-8 columns content">
    <?= $this->Form->create($computer) ?>
    <fieldset>
        <legend><?= __('Add Computer') ?></legend>
        <?php
            echo $this->Form->control('location_id', ['options' => $locations]);
            echo $this->Form->control('model');
            echo $this->Form->control('cond');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
