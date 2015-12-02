<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Play'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="plays index large-9 medium-8 columns content">
    <h3><?= __('Plays') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('hometeam') ?></th>
                <th><?= $this->Paginator->sort('awayteam') ?></th>
                <th><?= $this->Paginator->sort('dateOfGame') ?></th>
                <th><?= $this->Paginator->sort('homescore') ?></th>
                <th><?= $this->Paginator->sort('awayscore') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($plays as $play): ?>
            <tr>
                <td><?= h($play->hometeam) ?></td>
                <td><?= h($play->awayteam) ?></td>
                <td><?= h($play->dateOfGame) ?></td>
                <td><?= $this->Number->format($play->homescore) ?></td>
                <td><?= $this->Number->format($play->awayscore) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $play->hometeam]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $play->hometeam]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $play->hometeam], ['confirm' => __('Are you sure you want to delete # {0}?', $play->hometeam)]) ?>
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
