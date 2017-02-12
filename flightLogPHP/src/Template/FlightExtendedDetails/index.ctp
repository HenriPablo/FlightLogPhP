<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Flight Extended Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flightExtendedDetails index large-9 medium-8 columns content">
    <h3><?= __('Flight Extended Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('flight_id') ?></th>
                <th><?= $this->Paginator->sort('glider_tows') ?></th>
                <th><?= $this->Paginator->sort('skydive_loads') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flightExtendedDetails as $flightExtendedDetail): ?>
            <tr>
                <td><?= $this->Number->format($flightExtendedDetail->id) ?></td>
                <td><?= $flightExtendedDetail->has('flight') ? $this->Html->link($flightExtendedDetail->flight->id, ['controller' => 'Flight', 'action' => 'view', $flightExtendedDetail->flight->id]) : '' ?></td>
                <td><?= $this->Number->format($flightExtendedDetail->glider_tows) ?></td>
                <td><?= $this->Number->format($flightExtendedDetail->skydive_loads) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $flightExtendedDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flightExtendedDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flightExtendedDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightExtendedDetail->id)]) ?>
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
