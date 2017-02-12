<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Flight Time Total To Date'), ['action' => 'edit', $flightTimeTotalToDate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flight Time Total To Date'), ['action' => 'delete', $flightTimeTotalToDate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightTimeTotalToDate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flight Time Total To Date'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight Time Total To Date'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="flightTimeTotalToDate view large-9 medium-8 columns content">
    <h3><?= h($flightTimeTotalToDate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Actual Instrument') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->actual_instrument) ?></td>
        </tr>
        <tr>
            <th><?= __('Airplane Multi Engine Land') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->airplane_multi_engine_land) ?></td>
        </tr>
        <tr>
            <th><?= __('Airplane Singe Engine Land') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->airplane_singe_engine_land) ?></td>
        </tr>
        <tr>
            <th><?= __('As Flight Instructor') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->as_flight_instructor) ?></td>
        </tr>
        <tr>
            <th><?= __('Cross Country') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->cross_country) ?></td>
        </tr>
        <tr>
            <th><?= __('Cross Country Inst Received') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->cross_country_inst_received) ?></td>
        </tr>
        <tr>
            <th><?= __('Cross Country Pic') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->cross_country_pic) ?></td>
        </tr>
        <tr>
            <th><?= __('Cross Country Solo') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->cross_country_solo) ?></td>
        </tr>
        <tr>
            <th><?= __('Day') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->day) ?></td>
        </tr>
        <tr>
            <th><?= __('Dual Received') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->dual_received) ?></td>
        </tr>
        <tr>
            <th><?= __('Ground Trainer') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->ground_trainer) ?></td>
        </tr>
        <tr>
            <th><?= __('Instrument') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->instrument) ?></td>
        </tr>
        <tr>
            <th><?= __('Night') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->night) ?></td>
        </tr>
        <tr>
            <th><?= __('Night Instruction Received') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->night_instruction_received) ?></td>
        </tr>
        <tr>
            <th><?= __('Night Pic') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->night_pic) ?></td>
        </tr>
        <tr>
            <th><?= __('Night Pic Solo') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->night_pic_solo) ?></td>
        </tr>
        <tr>
            <th><?= __('Night Take Off And Landing Solo') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->night_take_off_and_landing_solo) ?></td>
        </tr>
        <tr>
            <th><?= __('Night Take Off And Landings') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->night_take_off_and_landings) ?></td>
        </tr>
        <tr>
            <th><?= __('No Instrument Approaches') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->no_instrument_approaches) ?></td>
        </tr>
        <tr>
            <th><?= __('No Landing') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->no_landing) ?></td>
        </tr>
        <tr>
            <th><?= __('Pilot In Command') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->pilot_in_command) ?></td>
        </tr>
        <tr>
            <th><?= __('Rotorcraft Helicopter') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->rotorcraft_helicopter) ?></td>
        </tr>
        <tr>
            <th><?= __('Second In Command') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->second_in_command) ?></td>
        </tr>
        <tr>
            <th><?= __('Simulated Instrument') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->simulated_instrument) ?></td>
        </tr>
        <tr>
            <th><?= __('Solo') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->solo) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Duration Of Flight') ?></th>
            <td><?= $this->Number->format($flightTimeTotalToDate->total_duration_of_flight) ?></td>
        </tr>
    </table>
</div>
