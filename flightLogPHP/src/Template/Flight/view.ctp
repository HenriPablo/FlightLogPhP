<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Flight'), ['action' => 'edit', $flight->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flight'), ['action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flight'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aircraft'), ['controller' => 'Aircraft', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aircraft'), ['controller' => 'Aircraft', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pilot'), ['controller' => 'Pilot', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pilot'), ['controller' => 'Pilot', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flight Extended Details'), ['controller' => 'FlightExtendedDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight Extended Detail'), ['controller' => 'FlightExtendedDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Story'), ['controller' => 'Story', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Story'), ['controller' => 'Story', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flight Pilot Xref'), ['controller' => 'FlightPilotXref', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight Pilot Xref'), ['controller' => 'FlightPilotXref', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="flight view large-9 medium-8 columns content">
    <h3><?= h($flight->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Aircraft') ?></th>
            <td><?= $flight->has('aircraft') ? $this->Html->link($flight->aircraft->id, ['controller' => 'Aircraft', 'action' => 'view', $flight->aircraft->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Aircraft Tail Number') ?></th>
            <td><?= h($flight->aircraft_tail_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Aircraft Type') ?></th>
            <td><?= h($flight->aircraft_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Remarks') ?></th>
            <td><?= h($flight->remarks) ?></td>
        </tr>
        <tr>
            <th><?= __('Route') ?></th>
            <td><?= h($flight->route) ?></td>
        </tr>
        <tr>
            <th><?= __('Pilot') ?></th>
            <td><?= $flight->has('pilot') ? $this->Html->link($flight->pilot->id, ['controller' => 'Pilot', 'action' => 'view', $flight->pilot->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($flight->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Actual Instrument') ?></th>
            <td><?= $this->Number->format($flight->actual_instrument) ?></td>
        </tr>
        <tr>
            <th><?= __('Aircraft Category And Class') ?></th>
            <td><?= $this->Number->format($flight->aircraft_category_and_class) ?></td>
        </tr>
        <tr>
            <th><?= __('As Flight Instructor') ?></th>
            <td><?= $this->Number->format($flight->as_flight_instructor) ?></td>
        </tr>
        <tr>
            <th><?= __('Cross Country') ?></th>
            <td><?= $this->Number->format($flight->cross_country) ?></td>
        </tr>
        <tr>
            <th><?= __('Day') ?></th>
            <td><?= $this->Number->format($flight->day) ?></td>
        </tr>
        <tr>
            <th><?= __('Departure') ?></th>
            <td><?= $this->Number->format($flight->departure) ?></td>
        </tr>
        <tr>
            <th><?= __('Destination') ?></th>
            <td><?= $this->Number->format($flight->destination) ?></td>
        </tr>
        <tr>
            <th><?= __('Dual Received') ?></th>
            <td><?= $this->Number->format($flight->dual_received) ?></td>
        </tr>
        <tr>
            <th><?= __('Extended Flight Details Id') ?></th>
            <td><?= $this->Number->format($flight->extended_flight_details_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ground Trainer') ?></th>
            <td><?= $this->Number->format($flight->ground_trainer) ?></td>
        </tr>
        <tr>
            <th><?= __('Instructor Id') ?></th>
            <td><?= $this->Number->format($flight->instructor_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Night') ?></th>
            <td><?= $this->Number->format($flight->night) ?></td>
        </tr>
        <tr>
            <th><?= __('No Day Landings') ?></th>
            <td><?= $this->Number->format($flight->no_day_landings) ?></td>
        </tr>
        <tr>
            <th><?= __('No Inst Aproaches') ?></th>
            <td><?= $this->Number->format($flight->no_inst_aproaches) ?></td>
        </tr>
        <tr>
            <th><?= __('No Night Landings') ?></th>
            <td><?= $this->Number->format($flight->no_night_landings) ?></td>
        </tr>
        <tr>
            <th><?= __('Pilot In Command') ?></th>
            <td><?= $this->Number->format($flight->pilot_in_command) ?></td>
        </tr>
        <tr>
            <th><?= __('Second In Command') ?></th>
            <td><?= $this->Number->format($flight->second_in_command) ?></td>
        </tr>
        <tr>
            <th><?= __('Simulated Instrument') ?></th>
            <td><?= $this->Number->format($flight->simulated_instrument) ?></td>
        </tr>
        <tr>
            <th><?= __('Story Id') ?></th>
            <td><?= $this->Number->format($flight->story_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Duration Of Flight') ?></th>
            <td><?= $this->Number->format($flight->total_duration_of_flight) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($flight->date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Flight Extended Details') ?></h4>
        <?php if (!empty($flight->flight_extended_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Flight Id') ?></th>
                <th><?= __('Glider Tows') ?></th>
                <th><?= __('Skydive Loads') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($flight->flight_extended_details as $flightExtendedDetails): ?>
            <tr>
                <td><?= h($flightExtendedDetails->id) ?></td>
                <td><?= h($flightExtendedDetails->flight_id) ?></td>
                <td><?= h($flightExtendedDetails->glider_tows) ?></td>
                <td><?= h($flightExtendedDetails->skydive_loads) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FlightExtendedDetails', 'action' => 'view', $flightExtendedDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FlightExtendedDetails', 'action' => 'edit', $flightExtendedDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FlightExtendedDetails', 'action' => 'delete', $flightExtendedDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightExtendedDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Story') ?></h4>
        <?php if (!empty($flight->story)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Allow Comments') ?></th>
                <th><?= __('Body') ?></th>
                <th><?= __('Created On') ?></th>
                <th><?= __('Flight Id') ?></th>
                <th><?= __('Link To Story') ?></th>
                <th><?= __('Modified On') ?></th>
                <th><?= __('Private Draft') ?></th>
                <th><?= __('Story Category Id') ?></th>
                <th><?= __('Story Decoration Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Class') ?></th>
                <th><?= __('Treat As Public Post') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($flight->story as $story): ?>
            <tr>
                <td><?= h($story->id) ?></td>
                <td><?= h($story->allow_comments) ?></td>
                <td><?= h($story->body) ?></td>
                <td><?= h($story->created_on) ?></td>
                <td><?= h($story->flight_id) ?></td>
                <td><?= h($story->link_to_story) ?></td>
                <td><?= h($story->modified_on) ?></td>
                <td><?= h($story->private_draft) ?></td>
                <td><?= h($story->story_category_id) ?></td>
                <td><?= h($story->story_decoration_id) ?></td>
                <td><?= h($story->title) ?></td>
                <td><?= h($story->class) ?></td>
                <td><?= h($story->treat_as_public_post) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Story', 'action' => 'view', $story->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Story', 'action' => 'edit', $story->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Story', 'action' => 'delete', $story->id], ['confirm' => __('Are you sure you want to delete # {0}?', $story->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Flight Pilot Xref') ?></h4>
        <?php if (!empty($flight->flight_pilot_xref)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Pilot Id') ?></th>
                <th><?= __('Flight Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($flight->flight_pilot_xref as $flightPilotXref): ?>
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
</div>
