<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Floor[]|\Cake\Collection\CollectionInterface $floors
 */
?>
<div class="floors index content">
    <?= $this->Html->link(__('New Floor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Floors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('floorid') ?></th>
                    <th><?= $this->Paginator->sort('floor') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($floors as $floor): ?>
                <tr>
                    <td><?= $this->Number->format($floor->floorid) ?></td>
                    <td><?= h($floor->floor) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $floor->floorid]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $floor->floorid]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $floor->floorid], ['confirm' => __('Are you sure you want to delete # {0}?', $floor->floorid)]) ?>
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
