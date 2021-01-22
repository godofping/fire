<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $room->roomid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $room->roomid), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rooms form content">
            <?= $this->Form->create($room) ?>
            <fieldset>
                <legend><?= __('Edit Room') ?></legend>
                <?php
                    echo $this->Form->control('room');
                    echo $this->Form->control('floorid', ['label' => 'Floor', 'options' => $floors, 'empty' => false]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>