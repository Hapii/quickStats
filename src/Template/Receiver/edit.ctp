<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $receiver->pid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $receiver->pid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Receiver'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="receiver form large-9 medium-8 columns content">
    <?= $this->Form->create($receiver) ?>
    <fieldset>
        <legend><?= __('Edit Receiver') ?></legend>
        <?php
            echo $this->Form->input('receivingYards');
            echo $this->Form->input('receivingTDs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
