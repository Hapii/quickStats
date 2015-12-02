<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Runningback'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="runningback form large-9 medium-8 columns content">
    <?= $this->Form->create($runningback) ?>
    <fieldset>
        <legend><?= __('Add Runningback') ?></legend>
        <?php
            echo $this->Form->input('rushingYards');
            echo $this->Form->input('rushingTDs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
