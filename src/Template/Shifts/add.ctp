<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shift $shift
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Shifts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bills'), ['controller' => 'Bills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bill'), ['controller' => 'Bills', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shifts form large-9 medium-8 columns content">
    <form method="post" accept-charset="utf-8" action="/happypc3/shifts/add">
    <fieldset>
        <legend><?= __('Add Shift') ?></legend>
        <?php

            $mysqli = NEW MySQLi('localhost','root','','happypc');
            $resultSet = $mysqli->query("SELECT id FROM users");
            $resultSet2 = $mysqli->query("SELECT id,name FROM locations");
            $resultSet3 = $mysqli->query("SELECT id FROM bills");
            echo $this->Flash->render();

        ?>

        <input type="hidden" name="_csrfToken" autocomplete="off" 
        value="d17ff490f947cce4f0a4e6119067d07f9d88e10bce15b50d8ff085d3ec15f3e54b93b1f3290ad48b578184c8d1871538644833c5c95ef57466d1fcee362bde3f">

        <h6>Enter User ID:</h6>
        <select name="user_id">
            <?php
                while($rows=$resultSet->fetch_assoc())
                {
                    $user_id = $rows['id'];
                    echo "<option value='$user_id'>$user_id</option>";
                }
            ?>
        </select>
        <h6>Enter Location ID:</h6>
        <select name="location_id">
            <?php
                while($rows=$resultSet2->fetch_assoc())
                {
                    $location_name = $rows['name'];
                    $location_id = $rows['id'];
                    echo "<option value='$location_id'>$location_name</option>";
                }
            ?>
        </select>
        <h6>Enter Bill ID:</h6>
        <select name="bill_id">
            <?php
                while($rows=$resultSet3->fetch_assoc())
                {
                    $bill_id = $rows['id'];
                    echo "<option value='$bill_id'>$bill_id</option>";
                }
            ?>
        </select>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
