<div class="foundItems view">
	<h2>
	<?php  __('Found Item');?>
	</h2>
	<dl>
	<?php $i = 0; $class = ' class="altrow"';?>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Id'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['id']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('User'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $this->Html->link($foundItem['User']['username'], array('controller' => 'users', 'action' => 'view', $foundItem['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Found Item Cat'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $this->Html->link($foundItem['FoundItemCat']['name'], array('controller' => 'found_item_cats', 'action' => 'view', $foundItem['FoundItemCat']['id'])); ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Title'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['title']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Image'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['image']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Image Type'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['image_type']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Description'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['description']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Lat'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['lat']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Lng'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['lng']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Created'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['created']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Created By'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['created_by']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Found'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['found']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Found By'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItem['FoundItem']['found_by']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3>
	<?php __('Actions'); ?>
	</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Found Item', true), array('action' => 'edit', $foundItem['FoundItem']['id'])); ?>
		</li>
		<li><?php echo $this->Html->link(__('Delete Found Item', true), array('action' => 'delete', $foundItem['FoundItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foundItem['FoundItem']['id'])); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Items', true), array('action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item', true), array('action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Item Cats', true), array('controller' => 'found_item_cats', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item Cat', true), array('controller' => 'found_item_cats', 'action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Item Comments', true), array('controller' => 'found_item_comments', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item Comment', true), array('controller' => 'found_item_comments', 'action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Item Images', true), array('controller' => 'found_item_images', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item Image', true), array('controller' => 'found_item_images', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="related">
	<h3>
	<?php __('Related Found Item Comments');?>
	</h3>
	<?php if (!empty($foundItem['FoundItemComment'])):?>
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
		foreach ($foundItem['FoundItemComment'] as $foundItemComment):
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
	<?php __('Related Found Item Images');?>
	</h3>
	<?php if (!empty($foundItem['FoundItemImage'])):?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php __('Id'); ?></th>
			<th><?php __('Found Item Id'); ?></th>
			<th><?php __('Image'); ?></th>
			<th><?php __('Image Type'); ?></th>
			<th><?php __('Created'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($foundItem['FoundItemImage'] as $foundItemImage):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $foundItemImage['id'];?></td>
			<td><?php echo $foundItemImage['found_item_id'];?></td>
			<td><?php echo $foundItemImage['image'];?></td>
			<td><?php echo $foundItemImage['image_type'];?></td>
			<td><?php echo $foundItemImage['created'];?></td>
			<td class="actions"><?php echo $this->Html->link(__('View', true), array('controller' => 'found_item_images', 'action' => 'view', $foundItemImage['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('controller' => 'found_item_images', 'action' => 'edit', $foundItemImage['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('controller' => 'found_item_images', 'action' => 'delete', $foundItemImage['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foundItemImage['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Found Item Image', true), array('controller' => 'found_item_images', 'action' => 'add'));?>
			</li>
		</ul>
	</div>
</div>
