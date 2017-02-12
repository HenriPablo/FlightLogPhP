<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aircraft'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aircraft index large-9 medium-8 columns content">
    <h3><?= __('Aircraft') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('aircraft_category') ?></th>
                <th><?= $this->Paginator->sort('aircraft_class') ?></th>
                <th><?= $this->Paginator->sort('aircraft_tail_number') ?></th>
                <th><?= $this->Paginator->sort('aircraft_type') ?></th>
                <th><?= $this->Paginator->sort('complex') ?></th>
                <th><?= $this->Paginator->sort('hi_performance') ?></th>
                <th><?= $this->Paginator->sort('nickname') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aircraft as $aircraft): ?>
            <tr>
                <td><?= $this->Number->format($aircraft->id) ?></td>
                <td><?= $this->Number->format($aircraft->aircraft_category) ?></td>
                <td><?= $this->Number->format($aircraft->aircraft_class) ?></td>
                <td><?= h($aircraft->aircraft_tail_number) ?></td>
                <td><?= h($aircraft->aircraft_type) ?></td>
                <td><?= h($aircraft->complex) ?></td>
                <td><?= h($aircraft->hi_performance) ?></td>
                <td><?= h($aircraft->nickname) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aircraft->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aircraft->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aircraft->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aircraft->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
