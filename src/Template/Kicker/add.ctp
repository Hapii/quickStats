<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Kicker'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="kicker form large-9 medium-8 columns content">
    <?= $this->Form->create($kicker) ?>
    <fieldset>
        <legend><?= __('Add Kicker') ?></legend>
        <?php
            echo $this->Form->input('fieldgoals');
            echo $this->Form->input('extrapoints');
            echo $this->Form->input('touchbacks');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
