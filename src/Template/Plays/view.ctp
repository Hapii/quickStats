<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Play'), ['action' => 'edit', $play->hometeam]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Play'), ['action' => 'delete', $play->hometeam], ['confirm' => __('Are you sure you want to delete # {0}?', $play->hometeam)]) ?> </li>
        <li><?= $this->Html->link(__('List Plays'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Play'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="plays view large-9 medium-8 columns content">
    <h3><?= h($play->hometeam) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Hometeam') ?></th>
            <td><?= h($play->hometeam) ?></td>
        </tr>
        <tr>
            <th><?= __('Awayteam') ?></th>
            <td><?= h($play->awayteam) ?></td>
        </tr>
        <tr>
            <th><?= __('Homescore') ?></th>
            <td><?= $this->Number->format($play->homescore) ?></td>
        </tr>
        <tr>
            <th><?= __('Awayscore') ?></th>
            <td><?= $this->Number->format($play->awayscore) ?></td>
        </tr>
        <tr>
            <th><?= __('DateOfGame') ?></th>
            <td><?= h($play->dateOfGame) ?></td>
        </tr>
    </table>
</div>
