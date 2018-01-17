<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actingas $actinga
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actinga->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actinga->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actingas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Crw'), ['controller' => 'Crw', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crw'), ['controller' => 'Crw', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actingas form large-9 medium-8 columns content">
    <?= $this->Form->create($actinga) ?>
    <fieldset>
        <legend><?= __('Edit Actingas') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('crw._ids', ['options' => $crw]);
            echo $this->Form->control('flight._ids', ['options' => $flight]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
