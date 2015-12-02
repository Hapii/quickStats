<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quarterback'), ['action' => 'edit', $quarterback->pid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quarterback'), ['action' => 'delete', $quarterback->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $quarterback->pid)]) ?> </li>
        <li><?= $this->Html->link(__('List Quarterback'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quarterback'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quarterback view large-9 medium-8 columns content">
    <h3><?= h($quarterback->pid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pid') ?></th>
            <td><?= $this->Number->format($quarterback->pid) ?></td>
        </tr>
        <tr>
            <th><?= __('Passingyards') ?></th>
            <td><?= $this->Number->format($quarterback->passingyards) ?></td>
        </tr>
        <tr>
            <th><?= __('Rushingyards') ?></th>
            <td><?= $this->Number->format($quarterback->rushingyards) ?></td>
        </tr>
        <tr>
            <th><?= __('PassingTDs') ?></th>
            <td><?= $this->Number->format($quarterback->passingTDs) ?></td>
        </tr>
        <tr>
            <th><?= __('RushingTDs') ?></th>
            <td><?= $this->Number->format($quarterback->rushingTDs) ?></td>
        </tr>
        <tr>
            <th><?= __('InterceptionsThrown') ?></th>
            <td><?= $this->Number->format($quarterback->interceptionsThrown) ?></td>
        </tr>
    </table>
</div>
