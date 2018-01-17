<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actingas'), ['controller' => 'Actingas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actingas'), ['controller' => 'Actingas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Crw'), ['controller' => 'Crw', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crw'), ['controller' => 'Crw', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flight form large-9 medium-8 columns content">
    <?= $this->Form->create($flight) ?>
    <fieldset>
        <legend><?= __('Add Flight') ?></legend>
        <?php
            echo $this->Form->control('date');
            echo $this->Form->control('total_duration_of_flight');
            echo $this->Form->control('actingas._ids', ['options' => $actingas]);
            echo $this->Form->control('crw._ids', ['options' => $crw]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
