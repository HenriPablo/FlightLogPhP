<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aircraft Category'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aircraftCategory form large-9 medium-8 columns content">
    <?= $this->Form->create($aircraftCategory) ?>
    <fieldset>
        <legend><?= __('Add Aircraft Category') ?></legend>
        <?php
            echo $this->Form->input('category');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
