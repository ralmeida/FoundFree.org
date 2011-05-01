<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend>
		<?php __('Admin Edit User'); ?>
		</legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('signup_id');
		echo $this->Form->input('facebookID');
		echo $this->Form->input('active');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3>
	<?php __('Actions'); ?>
	</h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?>
		</li>
		<li><?php echo $this->Html->link(__('List Signups', true), array('controller' => 'signups', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Signup', true), array('controller' => 'signups', 'action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List App Release Comments', true), array('controller' => 'app_release_comments', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New App Release Comment', true), array('controller' => 'app_release_comments', 'action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Feed Posts', true), array('controller' => 'feed_posts', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Feed Post', true), array('controller' => 'feed_posts', 'action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Item Comments', true), array('controller' => 'found_item_comments', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item Comment', true), array('controller' => 'found_item_comments', 'action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List User Groups', true), array('controller' => 'user_groups', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New User Group', true), array('controller' => 'user_groups', 'action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Items', true), array('controller' => 'found_items', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item', true), array('controller' => 'found_items', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
