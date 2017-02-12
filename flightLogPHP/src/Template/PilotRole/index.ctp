<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pilot Role'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pilotRole index large-9 medium-8 columns content">
    <h3><?= __('Pilot Role') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('role') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pilotRole as $pilotRole): ?>
            <tr>
                <td><?= $this->Number->format($pilotRole->id) ?></td>
                <td><?= h($pilotRole->role) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pilotRole->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pilotRole->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pilotRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pilotRole->id)]) ?>
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
