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
            <?= $this->Html->link(__('Edit Floor'), ['action' => 'edit', $floor->floorid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Floor'), ['action' => 'delete', $floor->floorid], ['confirm' => __('Are you sure you want to delete # {0}?', $floor->floorid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Floors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Floor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="floors view content">
            <h3><?= h($floor->floorid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Floor') ?></th>
                    <td><?= h($floor->floor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Floorid') ?></th>
                    <td><?= $this->Number->format($floor->floorid) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
