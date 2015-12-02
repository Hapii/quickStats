<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subscriber'), ['action' => 'edit', $subscriber->userName]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subscriber'), ['action' => 'delete', $subscriber->userName], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriber->userName)]) ?> </li>
        <li><?= $this->Html->link(__('List Subscriber'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscriber'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subscriber view large-9 medium-8 columns content">
    <h3><?= h($subscriber->userName) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('UserName') ?></th>
            <td><?= h($subscriber->userName) ?></td>
        </tr>
        <tr>
            <th><?= __('Pword') ?></th>
            <td><?= h($subscriber->pword) ?></td>
        </tr>
    </table>
</div>
