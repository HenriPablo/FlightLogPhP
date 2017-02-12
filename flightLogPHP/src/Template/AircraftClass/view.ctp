<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aircraft Clas'), ['action' => 'edit', $aircraftClas->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aircraft Clas'), ['action' => 'delete', $aircraftClas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aircraftClas->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aircraft Class'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aircraft Clas'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aircraftClass view large-9 medium-8 columns content">
    <h3><?= h($aircraftClas->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Class') ?></th>
            <td><?= h($aircraftClas->class) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($aircraftClas->id) ?></td>
        </tr>
    </table>
</div>
