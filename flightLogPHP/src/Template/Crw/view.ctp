<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crw $crw
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Crw'), ['action' => 'edit', $crw->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Crw'), ['action' => 'delete', $crw->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crw->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Crw'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crw'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actingas'), ['controller' => 'Actingas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actingas'), ['controller' => 'Actingas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="crw view large-9 medium-8 columns content">
    <h3><?= h($crw->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($crw->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($crw->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Actingas') ?></h4>
        <?php if (!empty($crw->actingas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($crw->actingas as $actingas): ?>
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
        <h4><?= __('Related Flight') ?></h4>
        <?php if (!empty($crw->flight)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Total Duration Of Flight') ?></th>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($crw->flight as $flight): ?>
            <tr>
                <td><?= h($flight->date) ?></td>
                <td><?= h($flight->total_duration_of_flight) ?></td>
                <td><?= h($flight->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Flight', 'action' => 'view', $flight->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Flight', 'action' => 'edit', $flight->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flight', 'action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
