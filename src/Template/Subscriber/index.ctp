<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subscriber'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subscriber index large-9 medium-8 columns content">
    <h3><?= __('Subscriber') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('userName') ?></th>
                <th><?= $this->Paginator->sort('pword') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscriber as $subscriber): ?>
            <tr>
                <td><?= h($subscriber->userName) ?></td>
                <td><?= h($subscriber->pword) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subscriber->userName]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subscriber->userName]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subscriber->userName], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriber->userName)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
