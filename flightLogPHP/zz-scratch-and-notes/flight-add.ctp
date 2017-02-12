<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['action' => 'index']) ?></li>
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
<div class="flight form large-9 medium-8 columns content">
    <?= $this->Form->create($flight) ?>
    <fieldset>
        <legend><?= __('Add Flight') ?></legend>
        <?php
            echo $this->Form->input('version');
            echo $this->Form->input('actual_instrument');
            //debug( $aircraft->toArray() );
            echo $this->Form->input('aircraft_id', ['options' => $aircraft, 'empty' => true]);
            echo $this->Form->input('aircraft_category_and_class');
            echo $this->Form->input('aircraft_tail_number');
            echo $this->Form->input('aircraft_type');
            echo $this->Form->input('as_flight_instructor');
            echo $this->Form->input('cross_country');
            echo $this->Form->input('date');
            echo $this->Form->input('day');
            // print_r($airport);
            //debug( $airport->toArray() );
            //echo $this->Form->input('departure_id', ['options' => $airport, 'empty' => true ]);
            ?>
            <div class="input select required">
            <label for="departure-id">Departure</label>
            <select id="departure-id" name="departure_id" required="required">
                <?php foreach ($airport as $option){ ?>
                <option value="<?php echo $option['id']; ?>"><?php echo $option['ico_identifier'] . ' - '. $option['name']; ?></option>
                <?php } ?>
            </select>
            </div>

        <?php
            //echo $this->Form->input('destination_id', ['options' => $airport, 'empty' => true] );
        ?>
        <div class="input select required">
            <label for="destination-id">Destination</label>
            <select id="destination-id" name="destination_id" required="required">
                <?php foreach ($airport as $option){?>
                    <option value="<?php echo $option['id'];?>"><?php echo $option['ico_identifier'] . ' - '. $option['name'];?></option>
                <?php } ?>
            </select>
        </div>
        <?php
            echo $this->Form->input('dual_received');
            echo $this->Form->input('extended_flight_details_id');
            echo $this->Form->input('ground_trainer');
            echo $this->Form->input('instructor_id');
            echo $this->Form->input('night');
            echo $this->Form->input('no_day_landings');
            echo $this->Form->input('no_inst_aproaches');
            echo $this->Form->input('no_night_landings');
            echo $this->Form->input('pilot_in_command');
            echo $this->Form->input('remarks');
            echo $this->Form->input('route');
            echo $this->Form->input('safety_pilot_id', ['options' => $pilot, 'empty' => true]);
            echo $this->Form->input('second_in_command');
            echo $this->Form->input('simulated_instrument');
            echo $this->Form->input('story_id');
            echo $this->Form->input('total_duration_of_flight');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
