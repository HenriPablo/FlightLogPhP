<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Flight Time Total To Date'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flightTimeTotalToDate index large-9 medium-8 columns content">
    <h3><?= __('Flight Time Total To Date') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('actual_instrument') ?></th>
                <th><?= $this->Paginator->sort('airplane_multi_engine_land') ?></th>
                <th><?= $this->Paginator->sort('airplane_singe_engine_land') ?></th>
                <th><?= $this->Paginator->sort('as_flight_instructor') ?></th>
                <th><?= $this->Paginator->sort('cross_country') ?></th>
                <th><?= $this->Paginator->sort('cross_country_inst_received') ?></th>
                <th><?= $this->Paginator->sort('cross_country_pic') ?></th>
                <th><?= $this->Paginator->sort('cross_country_solo') ?></th>
                <th><?= $this->Paginator->sort('day') ?></th>
                <th><?= $this->Paginator->sort('dual_received') ?></th>
                <th><?= $this->Paginator->sort('ground_trainer') ?></th>
                <th><?= $this->Paginator->sort('instrument') ?></th>
                <th><?= $this->Paginator->sort('night') ?></th>
                <th><?= $this->Paginator->sort('night_instruction_received') ?></th>
                <th><?= $this->Paginator->sort('night_pic') ?></th>
                <th><?= $this->Paginator->sort('night_pic_solo') ?></th>
                <th><?= $this->Paginator->sort('night_take_off_and_landing_solo') ?></th>
                <th><?= $this->Paginator->sort('night_take_off_and_landings') ?></th>
                <th><?= $this->Paginator->sort('no_instrument_approaches') ?></th>
                <th><?= $this->Paginator->sort('no_landing') ?></th>
                <th><?= $this->Paginator->sort('pilot_in_command') ?></th>
                <th><?= $this->Paginator->sort('rotorcraft_helicopter') ?></th>
                <th><?= $this->Paginator->sort('second_in_command') ?></th>
                <th><?= $this->Paginator->sort('simulated_instrument') ?></th>
                <th><?= $this->Paginator->sort('solo') ?></th>
                <th><?= $this->Paginator->sort('total_duration_of_flight') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flightTimeTotalToDate as $flightTimeTotalToDate): ?>
            <tr>
                <td><?= $this->Number->format($flightTimeTotalToDate->id) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->actual_instrument) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->airplane_multi_engine_land) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->airplane_singe_engine_land) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->as_flight_instructor) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->cross_country) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->cross_country_inst_received) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->cross_country_pic) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->cross_country_solo) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->day) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->dual_received) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->ground_trainer) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->instrument) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->night) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->night_instruction_received) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->night_pic) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->night_pic_solo) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->night_take_off_and_landing_solo) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->night_take_off_and_landings) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->no_instrument_approaches) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->no_landing) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->pilot_in_command) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->rotorcraft_helicopter) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->second_in_command) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->simulated_instrument) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->solo) ?></td>
                <td><?= $this->Number->format($flightTimeTotalToDate->total_duration_of_flight) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $flightTimeTotalToDate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flightTimeTotalToDate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flightTimeTotalToDate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightTimeTotalToDate->id)]) ?>
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
