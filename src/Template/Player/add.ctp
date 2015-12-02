<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Player'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="player form large-9 medium-8 columns content">
    <?= $this->Form->create($player) ?>
    <fieldset>
        <legend><?= __('Add Player') ?></legend>
        <?php
            echo $this->Form->input('pname');
            echo $this->Form->input('pweight');
            echo $this->Form->input('pheight');
            echo $this->Form->input('jerseNumber');
            echo $this->Form->input('partOfTeam');
            echo $this->Form->input('numYearsInNFL');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
