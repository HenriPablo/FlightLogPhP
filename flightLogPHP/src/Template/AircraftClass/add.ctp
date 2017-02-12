<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aircraft Class'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aircraftClass form large-9 medium-8 columns content">
    <?= $this->Form->create($aircraftClas) ?>
    <fieldset>
        <legend><?= __('Add Aircraft Clas') ?></legend>
        <?php
            echo $this->Form->input('class');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
