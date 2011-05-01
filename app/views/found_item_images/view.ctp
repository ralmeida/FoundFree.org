<div class="foundItemImages view">
	<h2>
	<?php  __('Found Item Image');?>
	</h2>
	<dl>
	<?php $i = 0; $class = ' class="altrow"';?>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Id'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItemImage['FoundItemImage']['id']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Found Item'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $this->Html->link($foundItemImage['FoundItem']['title'], array('controller' => 'found_items', 'action' => 'view', $foundItemImage['FoundItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Image'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItemImage['FoundItemImage']['image']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Image Type'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItemImage['FoundItemImage']['image_type']; ?>
			&nbsp;
		</dd>
		<dt <?php if ($i % 2 == 0) echo $class;?>>
		<?php __('Created'); ?>
		</dt>
		<dd <?php if ($i++ % 2 == 0) echo $class;?>>
		<?php echo $foundItemImage['FoundItemImage']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3>
	<?php __('Actions'); ?>
	</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Found Item Image', true), array('action' => 'edit', $foundItemImage['FoundItemImage']['id'])); ?>
		</li>
		<li><?php echo $this->Html->link(__('Delete Found Item Image', true), array('action' => 'delete', $foundItemImage['FoundItemImage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foundItemImage['FoundItemImage']['id'])); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Item Images', true), array('action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item Image', true), array('action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Items', true), array('controller' => 'found_items', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item', true), array('controller' => 'found_items', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
