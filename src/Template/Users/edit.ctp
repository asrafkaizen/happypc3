<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div >
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <br>
        <?=$this->Form->control('mxid', array('class' => 'form-control')); ?>
        <br>
        <?=$this->Form->control('name', array('class' => 'form-control')); ?>
        <br>
        <?=$this->Form->control('email', array('class' => 'form-control')); ?>


    </fieldset>
    <br>
    <table>
    <tr>
    <td><?= $this->Form->submit('Update', array('class' => 'btn btn-outline-info')); ?><td>
    <td style="padding-left: 979px;"><button type="button"  class="btn btn-outline-info" onclick="goBack()">Go Back</button></td>
    </tr>
    </table>
    
    <?= $this->Form->end() ?>
</div>
