<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight[]|\Cake\Collection\CollectionInterface $flight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actingas'), ['controller' => 'Actingas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actingas'), ['controller' => 'Actingas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Crw'), ['controller' => 'Crw', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crw'), ['controller' => 'Crw', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flight index large-9 medium-8 columns content">
    <h3><?= __('Flight') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_duration_of_flight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flight as $flight): ?>
            <tr>
                <td><?= h($flight->date) ?></td>
                <td><?= $this->Number->format($flight->total_duration_of_flight) ?></td>
                <td><?= $this->Number->format($flight->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $flight->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flight->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
