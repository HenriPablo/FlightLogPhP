<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crw $crw
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Crw'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actingas'), ['controller' => 'Actingas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actingas'), ['controller' => 'Actingas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="crw form large-9 medium-8 columns content">
    <?= $this->Form->create($crw) ?>
    <fieldset>
        <legend><?= __('Add Crw') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('actingas._ids', ['options' => $actingas]);
            echo $this->Form->control('flight._ids', ['options' => $flight]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

