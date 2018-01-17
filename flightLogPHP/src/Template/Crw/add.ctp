<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crw $crw
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Crw'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actingas'), ['controller' => 'Actingas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actingas'), ['controller' => 'Actingas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flight'), ['controller' => 'Flight', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flight', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="crw form large-9 medium-8 columns content">
    <?= $this->Form->create($crw) ?>
    <fieldset>
        <legend><?= __('Add Crw') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('actingas._ids', ['options' => $actingas]);
            echo $this->Form->control('flight._ids', ['options' => $flight]);
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
    $.ajax({
        type: 'get',
        url: "<?=$url?>",
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
                //$('#target').html(response.content);
                console.dir( response.content)
            }
        },
        error: function(e) {
            alert("An error occurred: " + e.responseText.message);
            console.log(e);
        }
    });
</script>
