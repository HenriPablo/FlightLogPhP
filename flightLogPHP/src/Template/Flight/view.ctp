<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Flight'), ['action' => 'edit', $flight->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flight'), ['action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flight'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actingas'), ['controller' => 'Actingas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actingas'), ['controller' => 'Actingas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Crw'), ['controller' => 'Crw', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crw'), ['controller' => 'Crw', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="flight view large-9 medium-8 columns content">
    <h3><?= h($flight->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Total Duration Of Flight') ?></th>
            <td><?= $this->Number->format($flight->total_duration_of_flight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($flight->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($flight->date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Actingas') ?></h4>
        <?php if (!empty($flight->actingas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($flight->actingas as $actingas): ?>
            <tr>
                <td><?= h($actingas->title) ?></td>
                <td><?= h($actingas->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Actingas', 'action' => 'view', $actingas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Actingas', 'action' => 'edit', $actingas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Actingas', 'action' => 'delete', $actingas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actingas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Crw') ?></h4>
        <?php if (!empty($flight->crw)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($flight->crw as $crw): ?>
            <tr>
                <td><?= h($crw->title) ?></td>
                <td><?= h($crw->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Crw', 'action' => 'view', $crw->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Crw', 'action' => 'edit', $crw->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Crw', 'action' => 'delete', $crw->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crw->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
