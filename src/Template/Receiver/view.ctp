<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Receiver'), ['action' => 'edit', $receiver->pid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Receiver'), ['action' => 'delete', $receiver->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $receiver->pid)]) ?> </li>
        <li><?= $this->Html->link(__('List Receiver'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Receiver'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="receiver view large-9 medium-8 columns content">
    <h3><?= h($receiver->pid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pid') ?></th>
            <td><?= $this->Number->format($receiver->pid) ?></td>
        </tr>
        <tr>
            <th><?= __('ReceivingYards') ?></th>
            <td><?= $this->Number->format($receiver->receivingYards) ?></td>
        </tr>
        <tr>
            <th><?= __('ReceivingTDs') ?></th>
            <td><?= $this->Number->format($receiver->receivingTDs) ?></td>
        </tr>
    </table>
</div>
