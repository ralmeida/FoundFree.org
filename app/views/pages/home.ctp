<div id="main">

	<h2>
	<?php echo $this->Html->link(__('A Place to share Found Free Stuff', true), '/found_items/'); ?>
	</h2>

	<p class="post-info"></p>

	<p>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<?php __("Welcome to FoundFree.org where you can share and find Free stuff. The concept for FoundFree.org was conceived from walking around and finding lots of Free stuff.
    There is more out there than you'd think! I tend to see about 7-10 things a week, depending on my travels, and that adds up. Now I'm sure someone is
    picking this stuff up, but am I? I know everyone loves free stuff but not everyone knows where it's at. I know people love to share and give things away, but maybe unsure
    who / how / where. So why not give everyone a place to do that safely online!"); ?>
	</p>

	<?php echo $this->Html->image('/images/junk.jpg', array('alt' => __('Image Post', true), 'border' => '0', 'style'=>'margin-left:auto;margin-right:auto;')); ?>

	<p>
	<?php __("The FoundFree.org online community aims to help the world share! With FoundFree.org users are able to connect to a Facebook account or create a FoundFree.org account.
    Once registered users can post items they find or have with a location of where to find it. Now anyone that comes to FoundFree.org can see what's being given away now!
    The FoundFree.org community is one that lives by the principles of: Love, Compassion, & Honesty"); ?>
	</p>

	<p>
	<?php __("If you have more questions about FoundFree.org please see our");?>
		<a href="/about" title="About FoundFree.org">About Page</a>
		<?php __("or drop me a line, I always love hearing from you!"); ?>
	</p>

	<blockquote>
		<p>
		<?php __('Love, Compassion, & Honesty'); ?>
			<br />--
			<?php echo $this->Html->link("Ronald Almeida II", 'mailto:ralmeida@foundfree.org'); ?>
		</p>
	</blockquote>

</div>

<div id="sidebar"></div>
