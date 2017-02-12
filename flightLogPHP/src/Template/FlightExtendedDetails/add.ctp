<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Flight Extended Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flightExtendedDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($flightExtendedDetail) ?>
    <fieldset>
        <legend><?= __('Add Flight Extended Detail') ?></legend>
        <?php
            echo $this->Form->input('flight_id', ['options' => $flight, 'empty' => true]);
            echo $this->Form->input('glider_tows');
            echo $this->Form->input('skydive_loads');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
