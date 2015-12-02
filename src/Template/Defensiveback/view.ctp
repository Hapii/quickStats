<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Defensiveback'), ['action' => 'edit', $defensiveback->pid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Defensiveback'), ['action' => 'delete', $defensiveback->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $defensiveback->pid)]) ?> </li>
        <li><?= $this->Html->link(__('List Defensiveback'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Defensiveback'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="defensiveback view large-9 medium-8 columns content">
    <h3><?= h($defensiveback->pid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pid') ?></th>
            <td><?= $this->Number->format($defensiveback->pid) ?></td>
        </tr>
        <tr>
            <th><?= __('Interceptions') ?></th>
            <td><?= $this->Number->format($defensiveback->interceptions) ?></td>
        </tr>
        <tr>
            <th><?= __('Tackles') ?></th>
            <td><?= $this->Number->format($defensiveback->tackles) ?></td>
        </tr>
        <tr>
            <th><?= __('Sacks') ?></th>
            <td><?= $this->Number->format($defensiveback->sacks) ?></td>
        </tr>
    </table>
</div>
