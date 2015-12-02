<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="team index large-9 medium-8 columns content">
    <h3><?= __('Team') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('tname') ?></th>
                <th><?= $this->Paginator->sort('division') ?></th>
                <th><?= $this->Paginator->sort('wins') ?></th>
                <th><?= $this->Paginator->sort('losses') ?></th>
                <th><?= $this->Paginator->sort('ties') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($team as $team): ?>
            <tr>
                <td><?= h($team->tname) ?></td>
                <td><?= h($team->division) ?></td>
                <td><?= $this->Number->format($team->wins) ?></td>
                <td><?= $this->Number->format($team->losses) ?></td>
                <td><?= $this->Number->format($team->ties) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $team->tname]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $team->tname]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $team->tname], ['confirm' => __('Are you sure you want to delete # {0}?', $team->tname)]) ?>
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
