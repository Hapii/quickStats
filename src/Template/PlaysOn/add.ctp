<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Plays On'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="playsOn form large-9 medium-8 columns content">
    <?= $this->Form->create($playsOn) ?>
    <fieldset>
        <legend><?= __('Add Plays On') ?></legend>
        <?php
            echo $this->Form->input('tname');
            echo $this->Form->input('NumberOfYears');
            echo $this->Form->input('startDate', ['empty' => true]);
            echo $this->Form->input('endDate', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
