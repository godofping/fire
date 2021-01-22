<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monitoring[]|\Cake\Collection\CollectionInterface $monitorings
 */
?>
<div class="monitorings index content">
    <?= $this->Html->link(__('New Monitoring'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Monitorings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('monitoringid') ?></th>
                    <th><?= $this->Paginator->sort('roomid') ?></th>
                    <th><?= $this->Paginator->sort('temperature') ?></th>
                    <th><?= $this->Paginator->sort('fire') ?></th>
                    <th><?= $this->Paginator->sort('gas') ?></th>
                    <th><?= $this->Paginator->sort('humidity') ?></th>
                    <th><?= $this->Paginator->sort('datetime') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($monitorings as $monitoring): ?>
                <tr>
                    <td><?= $this->Number->format($monitoring->monitoringid) ?></td>
                    <td><?= $this->Number->format($monitoring->roomid) ?></td>
                    <td><?= $this->Number->format($monitoring->temperature) ?></td>
                    <td><?= $this->Number->format($monitoring->fire) ?></td>
                    <td><?= $this->Number->format($monitoring->gas) ?></td>
                    <td><?= $this->Number->format($monitoring->humidity) ?></td>
                    <td><?= h($monitoring->datetime) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $monitoring->monitoringid]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monitoring->monitoringid]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monitoring->monitoringid], ['confirm' => __('Are you sure you want to delete # {0}?', $monitoring->monitoringid)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
