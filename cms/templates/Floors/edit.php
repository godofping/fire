<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Floor $floor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $floor->floorid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $floor->floorid), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Floors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="floors form content">
            <?= $this->Form->create($floor) ?>
            <fieldset>
                <legend><?= __('Edit Floor') ?></legend>
                <?php
                    echo $this->Form->control('floor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
