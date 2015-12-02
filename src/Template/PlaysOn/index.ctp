<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Plays On'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="playsOn index large-9 medium-8 columns content">
    <h3><?= __('Plays On') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pid') ?></th>
                <th><?= $this->Paginator->sort('tname') ?></th>
                <th><?= $this->Paginator->sort('NumberOfYears') ?></th>
                <th><?= $this->Paginator->sort('startDate') ?></th>
                <th><?= $this->Paginator->sort('endDate') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($playsOn as $playsOn): ?>
            <tr>
                <td><?= $this->Number->format($playsOn->pid) ?></td>
                <td><?= h($playsOn->tname) ?></td>
                <td><?= $this->Number->format($playsOn->NumberOfYears) ?></td>
                <td><?= h($playsOn->startDate) ?></td>
                <td><?= h($playsOn->endDate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $playsOn->pid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $playsOn->pid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $playsOn->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $playsOn->pid)]) ?>
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
