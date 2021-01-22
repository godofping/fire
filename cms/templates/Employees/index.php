<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<div class="employees index content">
    <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('employeeid') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('fullname') ?></th>
                    <th><?= $this->Paginator->sort('contactnumber') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->employeeid) ?></td>
                    <td><?= $employee->has('position') ? $this->Html->link($employee->position->position, ['controller' => 'Position', 'action' => 'view', $employee->position->positionid]) : '' ?></td>
                    <td><?= h($employee->fullname) ?></td>
                    <td><?= h($employee->contactnumber) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employee->employeeid]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->employeeid]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->employeeid], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->employeeid)]) ?>
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
