<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Has Favorite'), ['action' => 'edit', $hasFavorite->userName]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Has Favorite'), ['action' => 'delete', $hasFavorite->userName], ['confirm' => __('Are you sure you want to delete # {0}?', $hasFavorite->userName)]) ?> </li>
        <li><?= $this->Html->link(__('List Has Favorite'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Has Favorite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hasFavorite view large-9 medium-8 columns content">
    <h3><?= h($hasFavorite->userName) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('UserName') ?></th>
            <td><?= h($hasFavorite->userName) ?></td>
        </tr>
        <tr>
            <th><?= __('Tname') ?></th>
            <td><?= h($hasFavorite->tname) ?></td>
        </tr>
    </table>
</div>
