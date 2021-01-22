<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position $position
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Position'), ['action' => 'edit', $position->positionid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Position'), ['action' => 'delete', $position->positionid], ['confirm' => __('Are you sure you want to delete # {0}?', $position->positionid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Positions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Position'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="positions view content">
            <h3><?= h($position->positionid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($position->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Positionid') ?></th>
                    <td><?= $this->Number->format($position->positionid) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
