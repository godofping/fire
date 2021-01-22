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
            <?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->roomid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->roomid], ['confirm' => __('Are you sure you want to delete # {0}?', $room->roomid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Room'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rooms view content">
            <h3><?= h($room->roomid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Room') ?></th>
                    <td><?= h($room->room) ?></td>
                </tr>
                <tr>
                    <th><?= __('Roomid') ?></th>
                    <td><?= $this->Number->format($room->roomid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Floorid') ?></th>
                    <td><?= $this->Number->format($room->floorid) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
