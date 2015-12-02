<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Plays On'), ['action' => 'edit', $playsOn->pid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Plays On'), ['action' => 'delete', $playsOn->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $playsOn->pid)]) ?> </li>
        <li><?= $this->Html->link(__('List Plays On'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plays On'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="playsOn view large-9 medium-8 columns content">
    <h3><?= h($playsOn->pid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tname') ?></th>
            <td><?= h($playsOn->tname) ?></td>
        </tr>
        <tr>
            <th><?= __('Pid') ?></th>
            <td><?= $this->Number->format($playsOn->pid) ?></td>
        </tr>
        <tr>
            <th><?= __('NumberOfYears') ?></th>
            <td><?= $this->Number->format($playsOn->NumberOfYears) ?></td>
        </tr>
        <tr>
            <th><?= __('StartDate') ?></th>
            <td><?= h($playsOn->startDate) ?></td>
        </tr>
        <tr>
            <th><?= __('EndDate') ?></th>
            <td><?= h($playsOn->endDate) ?></td>
        </tr>
    </table>
</div>
