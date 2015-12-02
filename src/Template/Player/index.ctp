<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="player index large-9 medium-8 columns content">
    <h3><?= __('Player') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pid') ?></th>
                <th><?= $this->Paginator->sort('pname') ?></th>
                <th><?= $this->Paginator->sort('pweight') ?></th>
                <th><?= $this->Paginator->sort('pheight') ?></th>
                <th><?= $this->Paginator->sort('jerseNumber') ?></th>
                <th><?= $this->Paginator->sort('partOfTeam') ?></th>
                <th><?= $this->Paginator->sort('numYearsInNFL') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($player as $player): ?>
            <tr>
                <td><?= $this->Number->format($player->pid) ?></td>
                <td><?= h($player->pname) ?></td>
                <td><?= $this->Number->format($player->pweight) ?></td>
                <td><?= h($player->pheight) ?></td>
                <td><?= $this->Number->format($player->jerseNumber) ?></td>
                <td><?= h($player->partOfTeam) ?></td>
                <td><?= $this->Number->format($player->numYearsInNFL) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $player->pid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $player->pid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $player->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $player->pid)]) ?>
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
