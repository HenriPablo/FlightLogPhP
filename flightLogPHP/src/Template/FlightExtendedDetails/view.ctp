<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Flight Extended Detail'), ['action' => 'edit', $flightExtendedDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flight Extended Detail'), ['action' => 'delete', $flightExtendedDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightExtendedDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flight Extended Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight Extended Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="flightExtendedDetails view large-9 medium-8 columns content">
    <h3><?= h($flightExtendedDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Flight') ?></th>
            <td><?= $flightExtendedDetail->has('flight') ? $this->Html->link($flightExtendedDetail->flight->id, ['controller' => 'Flight', 'action' => 'view', $flightExtendedDetail->flight->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($flightExtendedDetail->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Glider Tows') ?></th>
            <td><?= $this->Number->format($flightExtendedDetail->glider_tows) ?></td>
        </tr>
        <tr>
            <th><?= __('Skydive Loads') ?></th>
            <td><?= $this->Number->format($flightExtendedDetail->skydive_loads) ?></td>
        </tr>
    </table>
</div>
