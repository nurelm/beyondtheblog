<div class="orders form">
  <?php echo $this->Form->create('Order'); ?>
  <fieldset>
    <legend><?php echo __('Add Order'); ?></legend>
    <?php
      echo $this->Form->hidden('user_id');
      echo $this->Form->input('doodads');
      echo $this->Form->input('inscription');
    ?>
  </fieldset>
  <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
  </ul>
</div>
