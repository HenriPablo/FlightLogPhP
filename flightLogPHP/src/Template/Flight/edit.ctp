<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $flight->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actingas'), ['controller' => 'Actingas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actingas'), ['controller' => 'Actingas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Crw'), ['controller' => 'Crw', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crw'), ['controller' => 'Crw', 'action' => 'add']) ?></li>
    </ul>
</nav>
<?php
//var_dump($actingas);

//foreach ($flight->actingas as $actingas):
//    echo $actingas->title;
//endforeach;
?>
<div class="flight form large-9 medium-8 columns content">
    <?= $this->Form->create($flight) ?>
    <fieldset>
        <legend><?= __('Edit Flight') ?></legend>
        <?php
            echo $this->Form->control('date');
            echo $this->Form->control('total_duration_of_flight');
            echo $this->Form->control('actingas._ids', ['options' => $actingas]);
            echo $this->Form->control('crw._ids', ['options' => $crw]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <div>
        <input type="button" value="Add Crew Member" id="add-crew-member" style="display: inline-block" class="button" />
    </div>





    <div class="input select">
        <label for="actingas-ids">Actingas</label>
        <input type="hidden" name="actingas[_ids]" value="">
        <select name="actingas[_ids][]" multiple="multiple" id="actingas-ids-0">
            <option value="1">CFI</option>
            <option value="2">Safety Pilot</option>
            <option value="3">CFII</option>
            <option value="4">MEI</option>
        </select>
    </div>


    <div class="input select">
        <label for="crw-ids">Crw</label>
        <input type="hidden" name="crw[_ids]" value="">
        <select name="crw[_ids][]" multiple="multiple" id="crw-ids-0">
            <option value="2">Rob</option>
            <option value="3">Tim</option>
            <option value="4">Misa</option>
            <option value="5">Cecily</option>
            <option value="6">Bart</option>
        </select>
    </div>

</div>


<script>
    var url = '<?=$this->Url->build(["controller" => "Crw", "action" => "crwbyajax", "_ext" => "json", ]); ?>';
</script>
<?php echo $this->Html->script('/js/create-crw-dropdown.js')?>

<script>
    $(document).ready( function () {
        $('#add-crew-member').on('click', function (e) {
            e.preventDefault();
            $('#actingas-ids').clone().attr('name','actingas[_ids][0]' ).insertBefore( $(this) );
            $('#crw-ids').clone().attr('name','crw[_ids][0]').insertBefore( $(this) );
        })
    })
</script>
