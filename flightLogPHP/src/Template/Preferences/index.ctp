<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Preference'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="preferences index large-9 medium-8 columns content">
    <h3><?= __('Preferences') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($preferences as $preference): ?>
            <tr>
                <td><?= $this->Number->format($preference->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $preference->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $preference->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $preference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preference->id)]) ?>
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
