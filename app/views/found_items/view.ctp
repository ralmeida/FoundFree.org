<div id="main">

	<h2>
	<?php echo $this->Html->link($foundItem['FoundItem']['title'], array("controller"=>"found_items", "action"=>"view", $foundItem['FoundItem']['id'])); ?>
	</h2>

	<p class="post-info">
		<em><?php __('Found By:');?> </em>
		<?php echo $this->Html->link($foundItem['User']['username'], array('controller' => 'users', 'action' => 'view', $foundItem['User']['id'])); ?>
		| <strong><?php __('Category :');?> </strong>
		<?php echo $this->Html->link($foundItem['FoundItemCat']['name'], array('controller' => 'found_item_cats', 'action' => 'view', $foundItem['FoundItemCat']['id'])); ?>
	</p>

	<p>
	<?php echo $foundItem['FoundItem']['description']; ?>
	</p>

	<div id="image-section">
	<?php foreach ($foundItem['FoundItemImage'] as $foundItemImage):
	echo $this->Html->image($foundItemImage['image_url']."/size:null", array('alt' => $foundItem['FoundItem']['title']));
	endforeach; ?>
	</div>

	<h3 id="comments">
	<?php echo count($foundItem['FoundItemComment']);?>
	<?php __('Responses');?>
	</h3>
	<?php if (!empty($foundItem['FoundItemComment'])):?>
	<ol class="commentlist">
	<?php
	$i = 0;
	foreach ($foundItem['FoundItemComment'] as $foundItemComment):
	$class = null;
	if($i++ % 2 == 0) {
		$altClass = 'thread-alt ';
	}
	?>
		<li class="<?php echo $altClass;?>depth-1">
			<div class="comment-info">
				<img alt="" src="images/gravatar.jpg" class="avatar" height="40"
					width="40" /> <cite> <a href="index.html"><?php echo $foundItemComment['user_id'];?>
				</a> <?php __('Says:');?> <br /> <span class="comment-data"><a
						href="#comment-63" title=""><?php echo $foundItemComment['created'];?>
					</a>
				</span> </cite>
			</div>

			<div class="comment-text">
				<p>
				<?php echo $foundItemComment['comment'];?>
				</p>
			</div></li>
			<?php endforeach; ?>
	</ol>
	<?php endif; ?>

	<!-- respond -->
	<div id="respond">

		<h3>Leave a Reply</h3>

		<form action="index.html" method="post" id="commentform">

			<p>
				<label for="name">Name (required)</label><br /> <input id="name"
					name="name" value="Your Name" type="text" tabindex="1" />
			</p>

			<p>
				<label for="email">Email Address (required)</label><br /> <input
					id="email" name="email" value="Your Email" type="text" tabindex="2" />
			</p>

			<p>
				<label for="website">Website</label><br /> <input id="website"
					name="website" value="Your Website" type="text" tabindex="3" />
			</p>

			<p>
				<label for="message">Your Message</label><br />
				<textarea id="message" name="message" rows="10" cols="20"
					tabindex="4"></textarea>
			</p>

			<p class="no-border">
				<input class="button" type="submit" value="Submit Comment"
					tabindex="5" />
			</p>

		</form>

		<!-- /respond -->
	</div>

</div>

<div id="sidebar">
	<h3>
	<?php __('Location');?>
	</h3>
	<?php
	echo $googleMapV3->map(array(
                                "localize"=>false,
                                "latitude"=>$foundItem['FoundItem']['lng'],
                                "longitude"=>$foundItem['FoundItem']['lat'],
                                "infoWindow"=>false,
                                "width"=>'280px',
                                "height"=>'350px') );

	echo $googleMapV3->addMarker(array(
                                "latitude"=>$foundItem['FoundItem']['lng'],
                                "longitude"=>$foundItem['FoundItem']['lat'] ) );
	?>
</div>

<script type="text/javascript">

$(document).ready(function() {
    Galleria.loadTheme('/themes/classic/galleria.classic.min.js');
    $("#image-section").galleria({
        width: 500,
        height: 500
    });
});

</script>
