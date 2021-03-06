<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monitoring $monitoring
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Monitorings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monitorings form content">
            <?= $this->Form->create($monitoring) ?>
            <fieldset>
                <legend><?= __('Add Monitoring') ?></legend>
                <?php
                    echo $this->Form->control('roomid');
                    echo $this->Form->control('temperature');
                    echo $this->Form->control('fire');
                    echo $this->Form->control('gas');
                    echo $this->Form->control('humidity');
                    echo $this->Form->control('datetime', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
