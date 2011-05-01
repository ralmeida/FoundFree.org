<div class="users index">
	<h2>
	<?php __('Users');?>
	</h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id');?>
			</th>
			<th><?php echo $this->Paginator->sort('first_name');?>
			</th>
			<th><?php echo $this->Paginator->sort('last_name');?>
			</th>
			<th><?php echo $this->Paginator->sort('username');?>
			</th>
			<th><?php echo $this->Paginator->sort('email');?>
			</th>
			<th><?php echo $this->Paginator->sort('password');?>
			</th>
			<th><?php echo $this->Paginator->sort('signup_id');?>
			</th>
			<th><?php echo $this->Paginator->sort('facebookID');?>
			</th>
			<th><?php echo $this->Paginator->sort('active');?>
			</th>
			<th><?php echo $this->Paginator->sort('created');?>
			</th>
			<th><?php echo $this->Paginator->sort('modified');?>
			</th>
			<th class="actions"><?php __('Actions');?>
			</th>
		</tr>
		<?php
		$i = 0;
		foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $user['User']['id']; ?>&nbsp;</td>
			<td><?php echo $user['User']['first_name']; ?>&nbsp;</td>
			<td><?php echo $user['User']['last_name']; ?>&nbsp;</td>
			<td><?php echo $user['User']['username']; ?>&nbsp;</td>
			<td><?php echo $user['User']['email']; ?>&nbsp;</td>
			<td><?php echo $user['User']['password']; ?>&nbsp;</td>
			<td><?php echo $this->Html->link($user['Signup']['name'], array('controller' => 'signups', 'action' => 'view', $user['Signup']['id'])); ?>
			</td>
			<td><?php echo $user['User']['facebookID']; ?>&nbsp;</td>
			<td><?php echo $user['User']['active']; ?>&nbsp;</td>
			<td><?php echo $user['User']['created']; ?>&nbsp;</td>
			<td><?php echo $user['User']['modified']; ?>&nbsp;</td>
			<td class="actions"><?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>
	</p>

	<div class="paging">
	<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
		|
		<?php echo $this->Paginator->numbers();?>
		|
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3>
	<?php __('Actions'); ?>
	</h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?>
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
