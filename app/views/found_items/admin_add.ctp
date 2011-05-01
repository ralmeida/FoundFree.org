<div class="foundItems form">
<?php echo $this->Form->create('FoundItem');?>
	<fieldset>
		<legend>
		<?php __('Admin Add Found Item'); ?>
		</legend>
		<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('found_item_cat_id');
		echo $this->Form->input('title');
		echo $this->Form->input('image');
		echo $this->Form->input('image_type');
		echo $this->Form->input('description');
		echo $this->Form->input('lat');
		echo $this->Form->input('lng');
		echo $this->Form->input('created_by');
		echo $this->Form->input('found');
		echo $this->Form->input('found_by');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3>
	<?php __('Actions'); ?>
	</h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Found Items', true), array('action' => 'index'));?>
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
