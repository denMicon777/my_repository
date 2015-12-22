<?php get_header() ?>
<?php the_post() ?>
    
	<div class="row">
	  <div class="col-md-8">
		
		<?php if(has_post_thumbnail()) { ?>
		  <div class="post-thumbnail">
	        <?=the_post_thumbnail('full');?>
          </div>
		<?php } ?>
		
		<h1><?php the_title() ?></h1>
		<p><?php the_content() ?></p>
	  </div>
	  
	  <?php get_template_part('sidebar'); ?>
	  
    </div>

	<div class="row">
	  <div class="col-md-6">
	    
		<?php if(comments_open()) { ?>
		  <?=comments_template();?>
		<?php } ?>
		
	  </div>
	</div>

<?php get_footer() ?>