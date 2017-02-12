<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pilotRole->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pilotRole->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pilot Role'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pilot Pilot Role Xref'), ['controller' => 'PilotPilotRoleXref', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pilotRole form large-9 medium-8 columns content">
    <?= $this->Form->create($pilotRole) ?>
    <fieldset>
        <legend><?= __('Edit Pilot Role') ?></legend>
        <?php
            echo $this->Form->input('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
