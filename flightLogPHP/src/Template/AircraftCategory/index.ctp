<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aircraft Category'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aircraftCategory index large-9 medium-8 columns content">
    <h3><?= __('Aircraft Category') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('category') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aircraftCategory as $aircraftCategory): ?>
            <tr>
                <td><?= $this->Number->format($aircraftCategory->id) ?></td>
                <td><?= h($aircraftCategory->category) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aircraftCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aircraftCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aircraftCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aircraftCategory->id)]) ?>
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
