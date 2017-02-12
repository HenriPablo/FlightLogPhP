<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aircraft Category'), ['action' => 'edit', $aircraftCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aircraft Category'), ['action' => 'delete', $aircraftCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aircraftCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aircraft Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aircraft Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aircraftCategory view large-9 medium-8 columns content">
    <h3><?= h($aircraftCategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= h($aircraftCategory->category) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($aircraftCategory->id) ?></td>
        </tr>
    </table>
</div>
