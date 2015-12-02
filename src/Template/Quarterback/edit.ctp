<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quarterback->pid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quarterback->pid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Quarterback'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="quarterback form large-9 medium-8 columns content">
    <?= $this->Form->create($quarterback) ?>
    <fieldset>
        <legend><?= __('Edit Quarterback') ?></legend>
        <?php
            echo $this->Form->input('passingyards');
            echo $this->Form->input('rushingyards');
            echo $this->Form->input('passingTDs');
            echo $this->Form->input('rushingTDs');
            echo $this->Form->input('interceptionsThrown');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
