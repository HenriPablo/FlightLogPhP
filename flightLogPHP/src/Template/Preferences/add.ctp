<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Preferences'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="preferences form large-9 medium-8 columns content">
    <?= $this->Form->create($preference) ?>
    <fieldset>
        <legend><?= __('Add Preference') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
