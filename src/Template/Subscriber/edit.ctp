<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subscriber->userName],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subscriber->userName)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subscriber'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="subscriber form large-9 medium-8 columns content">
    <?= $this->Form->create($subscriber) ?>
    <fieldset>
        <legend><?= __('Edit Subscriber') ?></legend>
        <?php
            echo $this->Form->input('pword');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
