<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->employeeid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->employeeid], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->employeeid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->employeeid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Fullname') ?></th>
                    <td><?= h($employee->fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contactnumber') ?></th>
                    <td><?= h($employee->contactnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Employeeid') ?></th>
                    <td><?= $this->Number->format($employee->employeeid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $employee->has('position') ? $this->Html->link($employee->position->position, ['controller' => 'Position', 'action' => 'view', $employee->position->positionid]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
