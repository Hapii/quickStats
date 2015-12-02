<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Runningback'), ['action' => 'edit', $runningback->pid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Runningback'), ['action' => 'delete', $runningback->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $runningback->pid)]) ?> </li>
        <li><?= $this->Html->link(__('List Runningback'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Runningback'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="runningback view large-9 medium-8 columns content">
    <h3><?= h($runningback->pid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pid') ?></th>
            <td><?= $this->Number->format($runningback->pid) ?></td>
        </tr>
        <tr>
            <th><?= __('RushingYards') ?></th>
            <td><?= $this->Number->format($runningback->rushingYards) ?></td>
        </tr>
        <tr>
            <th><?= __('RushingTDs') ?></th>
            <td><?= $this->Number->format($runningback->rushingTDs) ?></td>
        </tr>
    </table>
</div>
