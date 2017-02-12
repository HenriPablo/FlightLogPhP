<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pilot->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pilot->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pilot'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Flight Pilot Xref'), ['controller' => 'FlightPilotXref', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight Pilot Xref'), ['controller' => 'FlightPilotXref', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pilot form large-9 medium-8 columns content">
    <?= $this->Form->create($pilot) ?>
    <fieldset>
        <legend><?= __('Edit Pilot') ?></legend>
        <?php
            echo $this->Form->input('address1');
            echo $this->Form->input('address2');
            echo $this->Form->input('phone');
            echo $this->Form->input('certificate_no');
            echo $this->Form->input('city');
            echo $this->Form->input('email');
            echo $this->Form->input('first_name');
            echo $this->Form->input('land_line');
            echo $this->Form->input('last_name');
            echo $this->Form->input('notes');
            echo $this->Form->input('state');
            echo $this->Form->input('zip');
            echo $this->Form->input('class');
            echo $this->Form->input('description');
            echo $this->Form->input('email_show');
            echo $this->Form->input('enabled');
            echo $this->Form->input('passwd');
            echo $this->Form->input('user_real_name');
            echo $this->Form->input('username');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
