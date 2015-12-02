<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $team->tname],
                ['confirm' => __('Are you sure you want to delete # {0}?', $team->tname)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Team'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="team form large-9 medium-8 columns content">
    <?= $this->Form->create($team) ?>
    <fieldset>
        <legend><?= __('Edit Team') ?></legend>
        <?php
            echo $this->Form->input('division');
            echo $this->Form->input('wins');
            echo $this->Form->input('losses');
            echo $this->Form->input('ties');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
