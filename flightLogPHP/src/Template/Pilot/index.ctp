<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pilot'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flight Pilot Xref'), ['controller' => 'FlightPilotXref', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight Pilot Xref'), ['controller' => 'FlightPilotXref', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pilot index large-9 medium-8 columns content">
    <h3><?= __('Pilot') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('address1') ?></th>
                <th><?= $this->Paginator->sort('address2') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('certificate_no') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('first_name') ?></th>
                <th><?= $this->Paginator->sort('land_line') ?></th>
                <th><?= $this->Paginator->sort('last_name') ?></th>
                <th><?= $this->Paginator->sort('notes') ?></th>
                <th><?= $this->Paginator->sort('state') ?></th>
                <th><?= $this->Paginator->sort('zip') ?></th>
                <th><?= $this->Paginator->sort('class') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('email_show') ?></th>
                <th><?= $this->Paginator->sort('enabled') ?></th>
                <th><?= $this->Paginator->sort('passwd') ?></th>
                <th><?= $this->Paginator->sort('user_real_name') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pilot as $pilot): ?>
            <tr>
                <td><?= $this->Number->format($pilot->id) ?></td>
                <td><?= h($pilot->address1) ?></td>
                <td><?= h($pilot->address2) ?></td>
                <td><?= h($pilot->phone) ?></td>
                <td><?= h($pilot->certificate_no) ?></td>
                <td><?= h($pilot->city) ?></td>
                <td><?= h($pilot->email) ?></td>
                <td><?= h($pilot->first_name) ?></td>
                <td><?= h($pilot->land_line) ?></td>
                <td><?= h($pilot->last_name) ?></td>
                <td><?= h($pilot->notes) ?></td>
                <td><?= h($pilot->state) ?></td>
                <td><?= h($pilot->zip) ?></td>
                <td><?= h($pilot->class) ?></td>
                <td><?= h($pilot->description) ?></td>
                <td><?= h($pilot->email_show) ?></td>
                <td><?= h($pilot->enabled) ?></td>
                <td><?= h($pilot->passwd) ?></td>
                <td><?= h($pilot->user_real_name) ?></td>
                <td><?= h($pilot->username) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pilot->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pilot->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pilot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pilot->id)]) ?>
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
