<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Airport'), ['action' => 'edit', $airport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Airport'), ['action' => 'delete', $airport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $airport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Airport'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Airport'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="airport view large-9 medium-8 columns content">
    <h3><?= h($airport->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ico Identifier') ?></th>
            <td><?= h($airport->ico_identifier) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($airport->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($airport->id) ?></td>
        </tr>
    </table>
</div>
