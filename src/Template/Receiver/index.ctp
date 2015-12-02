<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Receiver'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="receiver index large-9 medium-8 columns content">
    <h3><?= __('Receiver') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pid') ?></th>
                <th><?= $this->Paginator->sort('receivingYards') ?></th>
                <th><?= $this->Paginator->sort('receivingTDs') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($receiver as $receiver): ?>
            <tr>
                <td><?= $this->Number->format($receiver->pid) ?></td>
                <td><?= $this->Number->format($receiver->receivingYards) ?></td>
                <td><?= $this->Number->format($receiver->receivingTDs) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $receiver->pid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $receiver->pid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $receiver->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $receiver->pid)]) ?>
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
