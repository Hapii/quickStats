<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Player'), ['action' => 'edit', $player->pid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Player'), ['action' => 'delete', $player->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $player->pid)]) ?> </li>
        <li><?= $this->Html->link(__('List Player'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="player view large-9 medium-8 columns content">
    <h3><?= h($player->pid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pname') ?></th>
            <td><?= h($player->pname) ?></td>
        </tr>
        <tr>
            <th><?= __('Pheight') ?></th>
            <td><?= h($player->pheight) ?></td>
        </tr>
        <tr>
            <th><?= __('PartOfTeam') ?></th>
            <td><?= h($player->partOfTeam) ?></td>
        </tr>
        <tr>
            <th><?= __('Pid') ?></th>
            <td><?= $this->Number->format($player->pid) ?></td>
        </tr>
        <tr>
            <th><?= __('Pweight') ?></th>
            <td><?= $this->Number->format($player->pweight) ?></td>
        </tr>
        <tr>
            <th><?= __('JerseNumber') ?></th>
            <td><?= $this->Number->format($player->jerseNumber) ?></td>
        </tr>
        <tr>
            <th><?= __('NumYearsInNFL') ?></th>
            <td><?= $this->Number->format($player->numYearsInNFL) ?></td>
        </tr>
    </table>
</div>
