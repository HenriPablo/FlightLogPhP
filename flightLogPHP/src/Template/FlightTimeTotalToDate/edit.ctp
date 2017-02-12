<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $flightTimeTotalToDate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $flightTimeTotalToDate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Flight Time Total To Date'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="flightTimeTotalToDate form large-9 medium-8 columns content">
    <?= $this->Form->create($flightTimeTotalToDate) ?>
    <fieldset>
        <legend><?= __('Edit Flight Time Total To Date') ?></legend>
        <?php
            echo $this->Form->input('actual_instrument');
            echo $this->Form->input('airplane_multi_engine_land');
            echo $this->Form->input('airplane_singe_engine_land');
            echo $this->Form->input('as_flight_instructor');
            echo $this->Form->input('cross_country');
            echo $this->Form->input('cross_country_inst_received');
            echo $this->Form->input('cross_country_pic');
            echo $this->Form->input('cross_country_solo');
            echo $this->Form->input('day');
            echo $this->Form->input('dual_received');
            echo $this->Form->input('ground_trainer');
            echo $this->Form->input('instrument');
            echo $this->Form->input('night');
            echo $this->Form->input('night_instruction_received');
            echo $this->Form->input('night_pic');
            echo $this->Form->input('night_pic_solo');
            echo $this->Form->input('night_take_off_and_landing_solo');
            echo $this->Form->input('night_take_off_and_landings');
            echo $this->Form->input('no_instrument_approaches');
            echo $this->Form->input('no_landing');
            echo $this->Form->input('pilot_in_command');
            echo $this->Form->input('rotorcraft_helicopter');
            echo $this->Form->input('second_in_command');
            echo $this->Form->input('simulated_instrument');
            echo $this->Form->input('solo');
            echo $this->Form->input('total_duration_of_flight');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
