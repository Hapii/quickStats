<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->tname]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->tname], ['confirm' => __('Are you sure you want to delete # {0}?', $team->tname)]) ?> </li>
        <li><?= $this->Html->link(__('List Team'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="team view large-9 medium-8 columns content">
    <h3><?= h($team->tname) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tname') ?></th>
            <td><?= h($team->tname) ?></td>
        </tr>
        <tr>
            <th><?= __('Division') ?></th>
            <td><?= h($team->division) ?></td>
        </tr>
        <tr>
            <th><?= __('Wins') ?></th>
            <td><?= $this->Number->format($team->wins) ?></td>
        </tr>
        <tr>
            <th><?= __('Losses') ?></th>
            <td><?= $this->Number->format($team->losses) ?></td>
        </tr>
        <tr>
            <th><?= __('Ties') ?></th>
            <td><?= $this->Number->format($team->ties) ?></td>
        </tr>
    </table>
</div>
