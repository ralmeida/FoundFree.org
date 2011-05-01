<div class="foundItemImages form">
<?php echo $this->Form->create('FoundItemImage');?>
	<fieldset>
		<legend>
		<?php __('Edit Found Item Image'); ?>
		</legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('found_item_id');
		echo $this->Form->input('image');
		echo $this->Form->input('image_type');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3>
	<?php __('Actions'); ?>
	</h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('FoundItemImage.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('FoundItemImage.id'))); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Item Images', true), array('action' => 'index'));?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Items', true), array('controller' => 'found_items', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item', true), array('controller' => 'found_items', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
