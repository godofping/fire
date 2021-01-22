<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->departmentid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->departmentid], ['confirm' => __('Are you sure you want to delete # {0}?', $department->departmentid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Department'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departments view content">
            <h3><?= h($department->departmentid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= h($department->department) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departmentid') ?></th>
                    <td><?= $this->Number->format($department->departmentid) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
