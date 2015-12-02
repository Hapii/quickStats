<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Defensivelineman'), ['action' => 'edit', $defensivelineman->pid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Defensivelineman'), ['action' => 'delete', $defensivelineman->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $defensivelineman->pid)]) ?> </li>
        <li><?= $this->Html->link(__('List Defensivelineman'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Defensivelineman'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="defensivelineman view large-9 medium-8 columns content">
    <h3><?= h($defensivelineman->pid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pid') ?></th>
            <td><?= $this->Number->format($defensivelineman->pid) ?></td>
        </tr>
        <tr>
            <th><?= __('Tackles') ?></th>
            <td><?= $this->Number->format($defensivelineman->tackles) ?></td>
        </tr>
        <tr>
            <th><?= __('Sacks') ?></th>
            <td><?= $this->Number->format($defensivelineman->sacks) ?></td>
        </tr>
    </table>
</div>
