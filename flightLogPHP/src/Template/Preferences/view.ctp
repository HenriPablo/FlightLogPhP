<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Preference'), ['action' => 'edit', $preference->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Preference'), ['action' => 'delete', $preference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preference->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Preferences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Preference'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="preferences view large-9 medium-8 columns content">
    <h3><?= h($preference->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($preference->id) ?></td>
        </tr>
    </table>
</div>
