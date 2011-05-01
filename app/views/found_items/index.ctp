<div id="main-main">

	<table class="grid thumbs" title="Found Items"
		action="/found_items/tIndex"
		style="margin-left: auto; margin-right: auto;">
		<tr>
			<th col="image_thumb" width="150" type="image">Image</th>
			<th col="title" width="150">Title</th>
			<th col="found_by" width="55">Found By</th>
			<th col="found_on" width="55">Found On</th>
			<th col="description">Description</th>
		</tr>
	</table>

	<script type="text/javascript">
    $(function() {
        $(".grid").loadGrid({
            nRowsShowing: 20,
            maxHeight: '100%',
            height: '100%',
            width: 890
        });
     });
</script>

<?php
/*
 <div class="foundItems index">
 <h2><?php __('Found Items');?></h2>
 <table cellpadding="0" cellspacing="0">
 <tr>
 <th><?php echo $this->Paginator->sort('user_id');?></th>
 <th><?php echo $this->Paginator->sort('found_item_cat_id');?></th>
 <th><?php echo $this->Paginator->sort('title');?></th>
 <th><?php echo $this->Paginator->sort('image');?></th>
 <th><?php echo $this->Paginator->sort('description');?></th>
 <th><?php echo $this->Paginator->sort('created');?></th>
 <th class="actions"><?php __('Actions');?></th>
 </tr>
 <?php
 $i = 0;
 foreach ($foundItems as $foundItem):
 $class = null;
 if ($i++ % 2 == 0) {
 $class = ' class="altrow"';
 }
 ?>
 <tr<?php echo $class;?>>
 <td valign="top">
 <?php echo $this->Html->link($foundItem['User']['username'], array('controller' => 'users', 'action' => 'view', $foundItem['User']['id'])); ?>
 </td>
 <td valign="top">
 <?php echo $this->Html->link($foundItem['FoundItemCat']['name'], array('controller' => 'found_item_cats', 'action' => 'view', $foundItem['FoundItemCat']['id'])); ?>
 </td>
 <td valign="top"><?php echo $foundItem['FoundItem']['title']; ?>&nbsp;</td>
 <td valign="top"><?php echo $this->Html->image($foundItem['FoundItem']['image_thumb'], array('alt' => $foundItem['FoundItem']['title']))?></td>
 <td valign="top"><?php echo $foundItem['FoundItem']['description']; ?>&nbsp;</td>
 <td valign="top"><?php echo $foundItem['FoundItem']['created']; ?>&nbsp;</td>
 <td class="actions" valign="top">
 <?php echo $this->Html->link(__('View', true), array('action' => 'view', $foundItem['FoundItem']['id'])); ?>
 <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $foundItem['FoundItem']['id'])); ?>
 <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $foundItem['FoundItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foundItem['FoundItem']['id'])); ?>
 </td>
 </tr>
 <?php endforeach; ?>
 </table>
 <p>
 <?php
 echo $this->Paginator->counter(array(
 'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
 ));
 ?>	</p>

 <div class="paging">
 <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
 |
 <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
 </div>
 </div>
 </div>
 <div id="sidebar">
 <div class="actions">
 <h3><?php __('Popular Items'); ?></h3>
 <ul>
 <li><?php echo $this->Html->link(__('New Found Item', true), array('action' => 'add')); ?></li>
 <li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
 <li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
 <li><?php echo $this->Html->link(__('List Found Item Cats', true), array('controller' => 'found_item_cats', 'action' => 'index')); ?> </li>
 <li><?php echo $this->Html->link(__('New Found Item Cat', true), array('controller' => 'found_item_cats', 'action' => 'add')); ?> </li>
 <li><?php echo $this->Html->link(__('List Found Item Comments', true), array('controller' => 'found_item_comments', 'action' => 'index')); ?> </li>
 <li><?php echo $this->Html->link(__('New Found Item Comment', true), array('controller' => 'found_item_comments', 'action' => 'add')); ?> </li>
 <li><?php echo $this->Html->link(__('List Found Item Images', true), array('controller' => 'found_item_images', 'action' => 'index')); ?> </li>
 <li><?php echo $this->Html->link(__('New Found Item Image', true), array('controller' => 'found_item_images', 'action' => 'add')); ?> </li>
 </ul>
 </div>
 */ ?>
</div>
