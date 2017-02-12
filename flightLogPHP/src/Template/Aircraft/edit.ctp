<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aircraft->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aircraft->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aircraft'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aircraft form large-9 medium-8 columns content">
    <?= $this->Form->create($aircraft) ?>
    <fieldset>
        <legend><?= __('Edit Aircraft') ?></legend>
        <?php
            echo $this->Form->input('aircraft_category');
            echo $this->Form->input('aircraft_class');
            echo $this->Form->input('aircraft_tail_number');
            echo $this->Form->input('aircraft_type');
            echo $this->Form->input('complex');
            echo $this->Form->input('hi_performance');
            echo $this->Form->input('nickname');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
