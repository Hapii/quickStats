<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $runningback->pid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $runningback->pid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Runningback'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="runningback form large-9 medium-8 columns content">
    <?= $this->Form->create($runningback) ?>
    <fieldset>
        <legend><?= __('Edit Runningback') ?></legend>
        <?php
            echo $this->Form->input('rushingYards');
            echo $this->Form->input('rushingTDs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
