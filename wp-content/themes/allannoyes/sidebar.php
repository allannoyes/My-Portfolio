<aside class="project-sidebar">
	<div class="project-description" id="toggleClass">
		<h2>Client/Project</h2>
		<p><?php the_title(); ?></p>
		<h2>About</h2>
		<p><?php echo get_post_meta($post->ID, 'Project Description', true); ?></p>
	</div>
	<div class="project-footer">
		<a href="<?php echo site_url(); ?>" class="nav-back">Back to Projects</a>
		<button onclick="toggle()" class="details-toggle" >Details</button>
	</div>
</aside>
