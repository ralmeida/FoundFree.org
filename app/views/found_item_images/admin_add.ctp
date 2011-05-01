<div class="foundItemImages form">
<?php echo $this->Form->create('FoundItemImage');?>
	<fieldset>
		<legend>
		<?php __('Admin Add Found Item Image'); ?>
		</legend>
		<?php
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

		<li><?php echo $this->Html->link(__('List Found Item Images', true), array('action' => 'index'));?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Items', true), array('controller' => 'found_items', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item', true), array('controller' => 'found_items', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
