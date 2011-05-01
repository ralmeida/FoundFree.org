<div class="users view">
	<h2>
	<?php  __('User');?>
	</h2>
	<dl>
	<?php $i = 0; $class = ' class="altrow"';?>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Id'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('First Name'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $user['User']['first_name']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Last Name'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $user['User']['last_name']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Username'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Email'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Password'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Signup'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $this->Html->link($user['Signup']['name'], array('controller' => 'signups', 'action' => 'view', $user['Signup']['id'])); ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('FacebookID'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $user['User']['facebookID']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Active'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $user['User']['active']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Created'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Modified'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3>
	<?php __('Actions'); ?>
	</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?>
		</li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?>
		</li>
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
<div class="related">
	<h3>
	<?php __('Related App Release Comments');?>
	</h3>
	<?php if (!empty($user['AppReleaseComment'])):?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php __('Id'); ?></th>
			<th><?php __('App Release Id'); ?></th>
			<th><?php __('User Id'); ?></th>
			<th><?php __('Comment'); ?></th>
			<th><?php __('Bug'); ?></th>
			<th><?php __('Approved'); ?></th>
			<th><?php __('Created'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($user['AppReleaseComment'] as $appReleaseComment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $appReleaseComment['id'];?></td>
			<td><?php echo $appReleaseComment['app_release_id'];?></td>
			<td><?php echo $appReleaseComment['user_id'];?></td>
			<td><?php echo $appReleaseComment['comment'];?></td>
			<td><?php echo $appReleaseComment['bug'];?></td>
			<td><?php echo $appReleaseComment['approved'];?></td>
			<td><?php echo $appReleaseComment['created'];?></td>
			<td class="actions"><?php echo $this->Html->link(__('View', true), array('controller' => 'app_release_comments', 'action' => 'view', $appReleaseComment['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('controller' => 'app_release_comments', 'action' => 'edit', $appReleaseComment['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('controller' => 'app_release_comments', 'action' => 'delete', $appReleaseComment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $appReleaseComment['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New App Release Comment', true), array('controller' => 'app_release_comments', 'action' => 'add'));?>
			</li>
		</ul>
	</div>
</div>
<div class="related">
	<h3>
	<?php __('Related Feed Posts');?>
	</h3>
	<?php if (!empty($user['FeedPost'])):?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php __('Id'); ?></th>
			<th><?php __('User Id'); ?></th>
			<th><?php __('Title'); ?></th>
			<th><?php __('Body'); ?></th>
			<th><?php __('Created'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($user['FeedPost'] as $feedPost):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $feedPost['id'];?></td>
			<td><?php echo $feedPost['user_id'];?></td>
			<td><?php echo $feedPost['title'];?></td>
			<td><?php echo $feedPost['body'];?></td>
			<td><?php echo $feedPost['created'];?></td>
			<td class="actions"><?php echo $this->Html->link(__('View', true), array('controller' => 'feed_posts', 'action' => 'view', $feedPost['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('controller' => 'feed_posts', 'action' => 'edit', $feedPost['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('controller' => 'feed_posts', 'action' => 'delete', $feedPost['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $feedPost['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feed Post', true), array('controller' => 'feed_posts', 'action' => 'add'));?>
			</li>
		</ul>
	</div>
</div>
<div class="related">
	<h3>
	<?php __('Related Found Item Comments');?>
	</h3>
	<?php if (!empty($user['FoundItemComment'])):?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php __('Id'); ?></th>
			<th><?php __('Found Item Id'); ?></th>
			<th><?php __('User Id'); ?></th>
			<th><?php __('Comment'); ?></th>
			<th><?php __('Approved'); ?></th>
			<th><?php __('Created'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($user['FoundItemComment'] as $foundItemComment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $foundItemComment['id'];?></td>
			<td><?php echo $foundItemComment['found_item_id'];?></td>
			<td><?php echo $foundItemComment['user_id'];?></td>
			<td><?php echo $foundItemComment['comment'];?></td>
			<td><?php echo $foundItemComment['approved'];?></td>
			<td><?php echo $foundItemComment['created'];?></td>
			<td class="actions"><?php echo $this->Html->link(__('View', true), array('controller' => 'found_item_comments', 'action' => 'view', $foundItemComment['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('controller' => 'found_item_comments', 'action' => 'edit', $foundItemComment['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('controller' => 'found_item_comments', 'action' => 'delete', $foundItemComment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foundItemComment['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Found Item Comment', true), array('controller' => 'found_item_comments', 'action' => 'add'));?>
			</li>
		</ul>
	</div>
</div>
<div class="related">
	<h3>
	<?php __('Related User Groups');?>
	</h3>
	<?php if (!empty($user['UserGroup'])):?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php __('Id'); ?></th>
			<th><?php __('User Id'); ?></th>
			<th><?php __('Group Id'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($user['UserGroup'] as $userGroup):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $userGroup['id'];?></td>
			<td><?php echo $userGroup['user_id'];?></td>
			<td><?php echo $userGroup['group_id'];?></td>
			<td class="actions"><?php echo $this->Html->link(__('View', true), array('controller' => 'user_groups', 'action' => 'view', $userGroup['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_groups', 'action' => 'edit', $userGroup['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_groups', 'action' => 'delete', $userGroup['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userGroup['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Group', true), array('controller' => 'user_groups', 'action' => 'add'));?>
			</li>
		</ul>
	</div>
</div>
<div class="related">
	<h3>
	<?php __('Related Found Items');?>
	</h3>
	<?php if (!empty($user['FoundItem'])):?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php __('Id'); ?></th>
			<th><?php __('User Id'); ?></th>
			<th><?php __('Found Item Cat Id'); ?></th>
			<th><?php __('Title'); ?></th>
			<th><?php __('Image'); ?></th>
			<th><?php __('Image Type'); ?></th>
			<th><?php __('Description'); ?></th>
			<th><?php __('Lat'); ?></th>
			<th><?php __('Lng'); ?></th>
			<th><?php __('Created'); ?></th>
			<th><?php __('Created By'); ?></th>
			<th><?php __('Found'); ?></th>
			<th><?php __('Found By'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($user['FoundItem'] as $foundItem):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $foundItem['id'];?></td>
			<td><?php echo $foundItem['user_id'];?></td>
			<td><?php echo $foundItem['found_item_cat_id'];?></td>
			<td><?php echo $foundItem['title'];?></td>
			<td><?php echo $foundItem['image'];?></td>
			<td><?php echo $foundItem['image_type'];?></td>
			<td><?php echo $foundItem['description'];?></td>
			<td><?php echo $foundItem['lat'];?></td>
			<td><?php echo $foundItem['lng'];?></td>
			<td><?php echo $foundItem['created'];?></td>
			<td><?php echo $foundItem['created_by'];?></td>
			<td><?php echo $foundItem['found'];?></td>
			<td><?php echo $foundItem['found_by'];?></td>
			<td class="actions"><?php echo $this->Html->link(__('View', true), array('controller' => 'found_items', 'action' => 'view', $foundItem['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('controller' => 'found_items', 'action' => 'edit', $foundItem['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('controller' => 'found_items', 'action' => 'delete', $foundItem['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foundItem['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Found Item', true), array('controller' => 'found_items', 'action' => 'add'));?>
			</li>
		</ul>
	</div>
</div>
