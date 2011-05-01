<div class="foundItemCats view">
	<h2>
	<?php  __('Found Item Cat');?>
	</h2>
	<dl>
	<?php $i = 0; $class = ' class="altrow"';?>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Id'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItemCat['FoundItemCat']['id']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Name'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItemCat['FoundItemCat']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3>
	<?php __('Actions'); ?>
	</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Found Item Cat', true), array('action' => 'edit', $foundItemCat['FoundItemCat']['id'])); ?>
		</li>
		<li><?php echo $this->Html->link(__('Delete Found Item Cat', true), array('action' => 'delete', $foundItemCat['FoundItemCat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foundItemCat['FoundItemCat']['id'])); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Item Cats', true), array('action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item Cat', true), array('action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Items', true), array('controller' => 'found_items', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item', true), array('controller' => 'found_items', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="related">
	<h3>
	<?php __('Related Found Items');?>
	</h3>
	<?php if (!empty($foundItemCat['FoundItem'])):?>
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
		foreach ($foundItemCat['FoundItem'] as $foundItem):
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
