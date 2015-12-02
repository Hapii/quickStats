<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $play->hometeam],
                ['confirm' => __('Are you sure you want to delete # {0}?', $play->hometeam)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Plays'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="plays form large-9 medium-8 columns content">
    <?= $this->Form->create($play) ?>
    <fieldset>
        <legend><?= __('Edit Play') ?></legend>
        <?php
            echo $this->Form->input('homescore');
            echo $this->Form->input('awayscore');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
