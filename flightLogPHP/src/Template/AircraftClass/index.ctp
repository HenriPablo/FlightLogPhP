<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aircraft Clas'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aircraftClass index large-9 medium-8 columns content">
    <h3><?= __('Aircraft Class') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('class') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aircraftClass as $aircraftClas): ?>
            <tr>
                <td><?= $this->Number->format($aircraftClas->id) ?></td>
                <td><?= h($aircraftClas->class) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aircraftClas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aircraftClas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aircraftClas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aircraftClas->id)]) ?>
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
