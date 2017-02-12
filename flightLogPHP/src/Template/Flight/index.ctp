<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aircraft'), ['controller' => 'Aircraft', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aircraft'), ['controller' => 'Aircraft', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pilot'), ['controller' => 'Pilot', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pilot'), ['controller' => 'Pilot', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flight Extended Details'), ['controller' => 'FlightExtendedDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight Extended Detail'), ['controller' => 'FlightExtendedDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Story'), ['controller' => 'Story', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Story'), ['controller' => 'Story', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flight Pilot Xref'), ['controller' => 'FlightPilotXref', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight Pilot Xref'), ['controller' => 'FlightPilotXref', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flight index large-9 medium-8 columns content">
    <h3><?= __('Flight') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('actual_instrument') ?></th>
                <th><?= $this->Paginator->sort('aircraft_id') ?></th>
                <th><?= $this->Paginator->sort('aircraft_category_and_class') ?></th>
                <th><?= $this->Paginator->sort('aircraft_tail_number') ?></th>
                <th><?= $this->Paginator->sort('aircraft_type') ?></th>
                <th><?= $this->Paginator->sort('as_flight_instructor') ?></th>
                <th><?= $this->Paginator->sort('cross_country') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th><?= $this->Paginator->sort('day') ?></th>
                <th><?= $this->Paginator->sort('departure') ?></th>
                <th><?= $this->Paginator->sort('destination') ?></th>
                <th><?= $this->Paginator->sort('dual_received') ?></th>
                <th><?= $this->Paginator->sort('extended_flight_details_id') ?></th>
                <th><?= $this->Paginator->sort('ground_trainer') ?></th>
                <th><?= $this->Paginator->sort('instructor_id') ?></th>
                <th><?= $this->Paginator->sort('night') ?></th>
                <th><?= $this->Paginator->sort('no_day_landings') ?></th>
                <th><?= $this->Paginator->sort('no_inst_aproaches') ?></th>
                <th><?= $this->Paginator->sort('no_night_landings') ?></th>
                <th><?= $this->Paginator->sort('pilot_in_command') ?></th>
                <th><?= $this->Paginator->sort('remarks') ?></th>
                <th><?= $this->Paginator->sort('route') ?></th>
                <th><?= $this->Paginator->sort('safety_pilot_id') ?></th>
                <th><?= $this->Paginator->sort('second_in_command') ?></th>
                <th><?= $this->Paginator->sort('simulated_instrument') ?></th>
                <th><?= $this->Paginator->sort('story_id') ?></th>
                <th><?= $this->Paginator->sort('total_duration_of_flight') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flight as $flight): ?>
            <tr>
                <td><?= $this->Number->format($flight->id) ?></td>
                <td><?= $this->Number->format($flight->actual_instrument) ?></td>
                <td><?= $flight->has('aircraft') ? $this->Html->link($flight->aircraft->id, ['controller' => 'Aircraft', 'action' => 'view', $flight->aircraft->id]) : '' ?></td>
                <td><?= $this->Number->format($flight->aircraft_category_and_class) ?></td>
                <td><?= h($flight->aircraft_tail_number) ?></td>
                <td><?= h($flight->aircraft_type) ?></td>
                <td><?= $this->Number->format($flight->as_flight_instructor) ?></td>
                <td><?= $this->Number->format($flight->cross_country) ?></td>
                <td><?= h($flight->date) ?></td>
                <td><?= $this->Number->format($flight->day) ?></td>
                <td><?= $this->Number->format($flight->departure) ?></td>
                <td><?= $this->Number->format($flight->destination) ?></td>
                <td><?= $this->Number->format($flight->dual_received) ?></td>
                <td><?= $this->Number->format($flight->extended_flight_details_id) ?></td>
                <td><?= $this->Number->format($flight->ground_trainer) ?></td>
                <td><?= $this->Number->format($flight->instructor_id) ?></td>
                <td><?= $this->Number->format($flight->night) ?></td>
                <td><?= $this->Number->format($flight->no_day_landings) ?></td>
                <td><?= $this->Number->format($flight->no_inst_aproaches) ?></td>
                <td><?= $this->Number->format($flight->no_night_landings) ?></td>
                <td><?= $this->Number->format($flight->pilot_in_command) ?></td>
                <td><?= h($flight->remarks) ?></td>
                <td><?= h($flight->route) ?></td>
                <td><?= $flight->has('pilot') ? $this->Html->link($flight->pilot->id, ['controller' => 'Pilot', 'action' => 'view', $flight->pilot->id]) : '' ?></td>
                <td><?= $this->Number->format($flight->second_in_command) ?></td>
                <td><?= $this->Number->format($flight->simulated_instrument) ?></td>
                <td><?= $this->Number->format($flight->story_id) ?></td>
                <td><?= $this->Number->format($flight->total_duration_of_flight) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $flight->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flight->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]) ?>
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
