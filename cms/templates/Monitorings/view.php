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
            <?= $this->Html->link(__('Edit Monitoring'), ['action' => 'edit', $monitoring->monitoringid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Monitoring'), ['action' => 'delete', $monitoring->monitoringid], ['confirm' => __('Are you sure you want to delete # {0}?', $monitoring->monitoringid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Monitorings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Monitoring'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monitorings view content">
            <h3><?= h($monitoring->monitoringid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Monitoringid') ?></th>
                    <td><?= $this->Number->format($monitoring->monitoringid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Roomid') ?></th>
                    <td><?= $this->Number->format($monitoring->roomid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Temperature') ?></th>
                    <td><?= $this->Number->format($monitoring->temperature) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fire') ?></th>
                    <td><?= $this->Number->format($monitoring->fire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gas') ?></th>
                    <td><?= $this->Number->format($monitoring->gas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Humidity') ?></th>
                    <td><?= $this->Number->format($monitoring->humidity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datetime') ?></th>
                    <td><?= h($monitoring->datetime) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
