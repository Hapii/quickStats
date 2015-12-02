<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Kicker'), ['action' => 'edit', $kicker->pid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kicker'), ['action' => 'delete', $kicker->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $kicker->pid)]) ?> </li>
        <li><?= $this->Html->link(__('List Kicker'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kicker'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kicker view large-9 medium-8 columns content">
    <h3><?= h($kicker->pid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pid') ?></th>
            <td><?= $this->Number->format($kicker->pid) ?></td>
        </tr>
        <tr>
            <th><?= __('Fieldgoals') ?></th>
            <td><?= $this->Number->format($kicker->fieldgoals) ?></td>
        </tr>
        <tr>
            <th><?= __('Extrapoints') ?></th>
            <td><?= $this->Number->format($kicker->extrapoints) ?></td>
        </tr>
        <tr>
            <th><?= __('Touchbacks') ?></th>
            <td><?= $this->Number->format($kicker->touchbacks) ?></td>
        </tr>
    </table>
</div>
