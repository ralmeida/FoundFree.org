<div class="foundItemCats form">
<?php echo $this->Form->create('FoundItemCat');?>
	<fieldset>
		<legend>
		<?php __('Admin Add Found Item Cat'); ?>
		</legend>
		<?php
		echo $this->Form->input('name');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3>
	<?php __('Actions'); ?>
	</h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Found Item Cats', true), array('action' => 'index'));?>
		</li>
		<li><?php echo $this->Html->link(__('List Found Items', true), array('controller' => 'found_items', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Found Item', true), array('controller' => 'found_items', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
