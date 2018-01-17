<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actingas $actinga
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actingas'), ['action' => 'edit', $actinga->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actingas'), ['action' => 'delete', $actinga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actinga->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actingas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actingas'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Crw'), ['controller' => 'Crw', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crw'), ['controller' => 'Crw', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actingas view large-9 medium-8 columns content">
    <h3><?= h($actinga->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($actinga->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($actinga->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Crw') ?></h4>
        <?php if (!empty($actinga->crw)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($actinga->crw as $crw): ?>
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
    <div class="related">
        <h4><?= __('Related Flight') ?></h4>
        <?php if (!empty($actinga->flight)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Total Duration Of Flight') ?></th>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($actinga->flight as $flight): ?>
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
