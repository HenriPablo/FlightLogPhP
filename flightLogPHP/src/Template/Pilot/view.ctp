<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pilot'), ['action' => 'edit', $pilot->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pilot'), ['action' => 'delete', $pilot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pilot->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pilot'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pilot'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flight Pilot Xref'), ['controller' => 'FlightPilotXref', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight Pilot Xref'), ['controller' => 'FlightPilotXref', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pilot view large-9 medium-8 columns content">
    <h3><?= h($pilot->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Address1') ?></th>
            <td><?= h($pilot->address1) ?></td>
        </tr>
        <tr>
            <th><?= __('Address2') ?></th>
            <td><?= h($pilot->address2) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($pilot->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Certificate No') ?></th>
            <td><?= h($pilot->certificate_no) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($pilot->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($pilot->email) ?></td>
        </tr>
        <tr>
            <th><?= __('First Name') ?></th>
            <td><?= h($pilot->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Land Line') ?></th>
            <td><?= h($pilot->land_line) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($pilot->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Notes') ?></th>
            <td><?= h($pilot->notes) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($pilot->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip') ?></th>
            <td><?= h($pilot->zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Class') ?></th>
            <td><?= h($pilot->class) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($pilot->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Passwd') ?></th>
            <td><?= h($pilot->passwd) ?></td>
        </tr>
        <tr>
            <th><?= __('User Real Name') ?></th>
            <td><?= h($pilot->user_real_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($pilot->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pilot->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Email Show') ?></th>
            <td><?= $pilot->email_show ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Enabled') ?></th>
            <td><?= $pilot->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Flight Pilot Xref') ?></h4>
        <?php if (!empty($pilot->flight_pilot_xref)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Pilot Id') ?></th>
                <th><?= __('Flight Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pilot->flight_pilot_xref as $flightPilotXref): ?>
            <tr>
                <td><?= h($flightPilotXref->pilot_id) ?></td>
                <td><?= h($flightPilotXref->flight_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FlightPilotXref', 'action' => 'view', $flightPilotXref->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FlightPilotXref', 'action' => 'edit', $flightPilotXref->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FlightPilotXref', 'action' => 'delete', $flightPilotXref->], ['confirm' => __('Are you sure you want to delete # {0}?', $flightPilotXref->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pilot Pilot Role Xref') ?></h4>
        <?php if (!empty($pilot->pilot_pilot_role_xref)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Pilot Id') ?></th>
                <th><?= __('Pilot Role Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pilot->pilot_pilot_role_xref as $pilotPilotRoleXref): ?>
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
