<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actingas'), ['controller' => 'Actingas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actingas'), ['controller' => 'Actingas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Crw'), ['controller' => 'Crw', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crw'), ['controller' => 'Crw', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flight form large-9 medium-8 columns content">
    <?= $this->Form->create($flight) ?>
    <fieldset>
        <legend><?= __('Add Flight') ?></legend>
        <?php
            echo $this->Form->control('date');
            echo $this->Form->control('total_duration_of_flight');
            echo $this->Form->control('actingas._ids', ['options' => $actingas]);
            echo $this->Form->control('crw._ids', ['options' => $crw]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
//echo Helper::url(array('action' => 'crwbyajax', 'ext' => 'json'));
$url =  $this->Url->build([
    "controller" => "Crw",
    "action" => "crwbyajax",
    "_ext" => "json",
]);
?>
<script>
    $(document).ready( function () {
        $("#actingas-ids").change( function () {
            var selectedValue = $(this).val();
            var targeturl = '<?=$url?>' + '?id=' + selectedValue;
            $.ajax({
                type: 'get',
                url: targeturl,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                },
                success: function(response) {
                    console.dir( response);
                    if (response.error) {
                        alert(response.error);
                        console.log(response.error);
                    }
                    if (response.content) {
                        $('#crw-ids').html(response.content);
                        console.dir( response.content)
                    }
                },
                error: function(e) {
                    alert("An error occurred: " + e.responseText.message);
                    console.log(e);
                }
            });
        });/* end change */
    });/* end doc ready */
</script>
