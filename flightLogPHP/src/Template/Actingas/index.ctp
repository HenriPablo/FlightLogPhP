<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actingas[]|\Cake\Collection\CollectionInterface $actingas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actingas'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Crw'), ['controller' => 'Crw', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crw'), ['controller' => 'Crw', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actingas index large-9 medium-8 columns content">
    <h3><?= __('Actingas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actingas as $actinga): ?>
            <tr>
                <td><?= h($actinga->title) ?></td>
                <td><?= $this->Number->format($actinga->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actinga->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actinga->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actinga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actinga->id)]) ?>
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
