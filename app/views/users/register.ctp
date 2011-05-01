<style>
#recaptcha_table tr {
	height: auto;
}
</style>
<div id="main" class="users form">
	<h2>
	<?php __('New User Registration'); ?>
	</h2>
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->Form->create('User');?>
	<?php
	echo $this->Form->input('first_name');
	echo $this->Form->input('last_name');
	echo $this->Form->input('username');
	echo $this->Form->input('email', array('label'=>__('E-Mail',true)));
	echo $this->Form->input('email2', array('label'=>__('Verify E-Mail',true)));
	echo $this->Form->input('agree', array('label'=>__('I Agree to the ',true) . $this->Html->link(__("Terms of Service", true), '/tos', array('target'=>'_blank')), 'type'=>'checkbox'));
	$captchaError = (isset($captchaError)) ? "<br />".$captchaError : "";
	$captchaErrorStyle = ((bool) $captchaError) ? "error" : "";
	echo "<div class='input {$captchaErrorStyle}'><div style='float:left;'>";
	echo "<label id='captcha_label'>CAPTCHA</label></div><div style='float:left;'>";
	echo $captchaTool->show();
	echo "{$captchaError}</div><div class='clearer'></div></div>";
	?>
	<?php echo $this->Form->end(__('Register for FoundFree.org', true));?>
</div>
<div id="sidebar" class="actions">
	<h3>
	<?php __('Actions'); ?>
	</h3>
	<ul>
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
