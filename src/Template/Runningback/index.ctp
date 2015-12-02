<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Runningback'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="runningback index large-9 medium-8 columns content">
    <h3><?= __('Runningback') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pid') ?></th>
                <th><?= $this->Paginator->sort('rushingYards') ?></th>
                <th><?= $this->Paginator->sort('rushingTDs') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($runningback as $runningback): ?>
            <tr>
                <td><?= $this->Number->format($runningback->pid) ?></td>
                <td><?= $this->Number->format($runningback->rushingYards) ?></td>
                <td><?= $this->Number->format($runningback->rushingTDs) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $runningback->pid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $runningback->pid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $runningback->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $runningback->pid)]) ?>
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
