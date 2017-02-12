<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pilot Role'), ['action' => 'edit', $pilotRole->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pilot Role'), ['action' => 'delete', $pilotRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pilotRole->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pilot Role'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pilot Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pilotRole view large-9 medium-8 columns content">
    <h3><?= h($pilotRole->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= h($pilotRole->role) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pilotRole->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pilot Pilot Role Xref') ?></h4>
        <?php if (!empty($pilotRole->pilot_pilot_role_xref)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Pilot Id') ?></th>
                <th><?= __('Pilot Role Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pilotRole->pilot_pilot_role_xref as $pilotPilotRoleXref): ?>
            <tr>
                <td><?= h($pilotPilotRoleXref->id) ?></td>
                <td><?= h($pilotPilotRoleXref->pilot_id) ?></td>
                <td><?= h($pilotPilotRoleXref->pilot_role_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PilotPilotRoleXref', 'action' => 'view', $pilotPilotRoleXref->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PilotPilotRoleXref', 'action' => 'edit', $pilotPilotRoleXref->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PilotPilotRoleXref', 'action' => 'delete', $pilotPilotRoleXref->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pilotPilotRoleXref->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
