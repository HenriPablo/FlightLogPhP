<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $preference->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $preference->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Preferences'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="preferences form large-9 medium-8 columns content">
    <?= $this->Form->create($preference) ?>
    <fieldset>
        <legend><?= __('Edit Preference') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
