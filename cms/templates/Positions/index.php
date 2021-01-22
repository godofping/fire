<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position[]|\Cake\Collection\CollectionInterface $positions
 */
?>
<div class="positions index content">
    <?= $this->Html->link(__('New Position'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Positions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('positionid') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($positions as $position): ?>
                <tr>
                    <td><?= $this->Number->format($position->positionid) ?></td>
                    <td><?= h($position->position) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $position->positionid]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $position->positionid]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $position->positionid], ['confirm' => __('Are you sure you want to delete # {0}?', $position->positionid)]) ?>
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
