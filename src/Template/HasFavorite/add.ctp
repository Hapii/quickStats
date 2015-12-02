<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Has Favorite'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="hasFavorite form large-9 medium-8 columns content">
    <?= $this->Form->create($hasFavorite) ?>
    <fieldset>
        <legend><?= __('Add Has Favorite') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
