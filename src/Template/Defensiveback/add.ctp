<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Defensiveback'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="defensiveback form large-9 medium-8 columns content">
    <?= $this->Form->create($defensiveback) ?>
    <fieldset>
        <legend><?= __('Add Defensiveback') ?></legend>
        <?php
            echo $this->Form->input('interceptions');
            echo $this->Form->input('tackles');
            echo $this->Form->input('sacks');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
