<div class="users view">
  <h2><?php echo __('User'); ?></h2>
  <dl>
    <dt><?php echo __('Id'); ?></dt>
    <dd>
      <?php echo h($user['User']['id']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Username'); ?></dt>
    <dd>
      <?php echo h($user['User']['username']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Password'); ?></dt>
    <dd>
      <?php echo h($user['User']['password']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Created'); ?></dt>
    <dd>
      <?php echo h($user['User']['created']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Modified'); ?></dt>
    <dd>
      <?php echo h($user['User']['modified']); ?>
      &nbsp;
    </dd>
  </dl>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
    <li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
    <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
  </ul>
</div>
<div class="related">
  <h3><?php echo __('Related Orders'); ?></h3>
  <?php if (!empty($user['Order'])): ?>
    <table cellpadding = "0" cellspacing = "0">
      <tr>
        <th><?php echo $this->Paginator->sort('id'); ?></th>
        <th><?php echo $this->Paginator->sort('user_id'); ?></th>
        <th><?php echo $this->Paginator->sort('created'); ?></th>
        <th><?php echo $this->Paginator->sort('modified'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php
      $i = 0;
      foreach ($orders as $order):
        ?>
        <tr>
          <td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
          <td><?php echo h($order['Order']['user_id']); ?></td>
          <td><?php echo h($order['Order']['created']); ?></td>
          <td><?php echo h($order['Order']['modified']); ?></td>
          <td class="actions">
            <?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['Order']['id'])); ?>
            <?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['Order']['id'])); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <p>
      <?php
      echo $this->Paginator->counter(array(
          'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
      ));
      ?>
    </p>

    <div class="paging">
      <?php
      echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
      echo $this->Paginator->numbers(array('separator' => ''));
      echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
      ?>
    </div>
  <?php endif; ?>

  <div class="actions">
    <ul>
      <li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add_to_user', $user['User']['id'])); ?> </li>
    </ul>
  </div>
</div>
