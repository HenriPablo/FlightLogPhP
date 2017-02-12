<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aircraft'), ['action' => 'edit', $aircraft->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aircraft'), ['action' => 'delete', $aircraft->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aircraft->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aircraft'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aircraft'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aircraft view large-9 medium-8 columns content">
    <h3><?= h($aircraft->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Aircraft Tail Number') ?></th>
            <td><?= h($aircraft->aircraft_tail_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Aircraft Type') ?></th>
            <td><?= h($aircraft->aircraft_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Nickname') ?></th>
            <td><?= h($aircraft->nickname) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($aircraft->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Aircraft Category') ?></th>
            <td><?= $this->Number->format($aircraft->aircraft_category) ?></td>
        </tr>
        <tr>
            <th><?= __('Aircraft Class') ?></th>
            <td><?= $this->Number->format($aircraft->aircraft_class) ?></td>
        </tr>
        <tr>
            <th><?= __('Complex') ?></th>
            <td><?= $aircraft->complex ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Hi Performance') ?></th>
            <td><?= $aircraft->hi_performance ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Flight') ?></h4>
        <?php if (!empty($aircraft->flight)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Actual Instrument') ?></th>
                <th><?= __('Aircraft Id') ?></th>
                <th><?= __('Aircraft Category And Class') ?></th>
                <th><?= __('Aircraft Tail Number') ?></th>
                <th><?= __('Aircraft Type') ?></th>
                <th><?= __('As Flight Instructor') ?></th>
                <th><?= __('Cross Country') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Day') ?></th>
                <th><?= __('Departure') ?></th>
                <th><?= __('Destination') ?></th>
                <th><?= __('Dual Received') ?></th>
                <th><?= __('Extended Flight Details Id') ?></th>
                <th><?= __('Ground Trainer') ?></th>
                <th><?= __('Instructor Id') ?></th>
                <th><?= __('Night') ?></th>
                <th><?= __('No Day Landings') ?></th>
                <th><?= __('No Inst Aproaches') ?></th>
                <th><?= __('No Night Landings') ?></th>
                <th><?= __('Pilot In Command') ?></th>
                <th><?= __('Remarks') ?></th>
                <th><?= __('Route') ?></th>
                <th><?= __('Safety Pilot Id') ?></th>
                <th><?= __('Second In Command') ?></th>
                <th><?= __('Simulated Instrument') ?></th>
                <th><?= __('Story Id') ?></th>
                <th><?= __('Total Duration Of Flight') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aircraft->flight as $flight): ?>
            <tr>
                <td><?= h($flight->id) ?></td>
                <td><?= h($flight->actual_instrument) ?></td>
                <td><?= h($flight->aircraft_id) ?></td>
                <td><?= h($flight->aircraft_category_and_class) ?></td>
                <td><?= h($flight->aircraft_tail_number) ?></td>
                <td><?= h($flight->aircraft_type) ?></td>
                <td><?= h($flight->as_flight_instructor) ?></td>
                <td><?= h($flight->cross_country) ?></td>
                <td><?= h($flight->date) ?></td>
                <td><?= h($flight->day) ?></td>
                <td><?= h($flight->departure) ?></td>
                <td><?= h($flight->destination) ?></td>
                <td><?= h($flight->dual_received) ?></td>
                <td><?= h($flight->extended_flight_details_id) ?></td>
                <td><?= h($flight->ground_trainer) ?></td>
                <td><?= h($flight->instructor_id) ?></td>
                <td><?= h($flight->night) ?></td>
                <td><?= h($flight->no_day_landings) ?></td>
                <td><?= h($flight->no_inst_aproaches) ?></td>
                <td><?= h($flight->no_night_landings) ?></td>
                <td><?= h($flight->pilot_in_command) ?></td>
                <td><?= h($flight->remarks) ?></td>
                <td><?= h($flight->route) ?></td>
                <td><?= h($flight->safety_pilot_id) ?></td>
                <td><?= h($flight->second_in_command) ?></td>
                <td><?= h($flight->simulated_instrument) ?></td>
                <td><?= h($flight->story_id) ?></td>
                <td><?= h($flight->total_duration_of_flight) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Flight', 'action' => 'view', $flight->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Flight', 'action' => 'edit', $flight->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flight', 'action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
