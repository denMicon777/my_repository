<?php get_header() ?>
<?php the_post() ?>
    
	<div class="row">
	  <div class="col-md-8">
		
		<?php if(has_post_thumbnail()) { ?>
		  <div class="post-thumbnail">
	        <a href="<?php the_permalink() ?>" title="<?=the_title_attribute(); ?>"><?=the_post_thumbnail('medium');?></a>
          </div>
		<?php } ?>
		
		<h1><?php the_title() ?></h1>
		<p><?php the_content() ?></p> 
	  </div>
	  
	  <?php get_template_part('sidebar'); ?>
	  
    </div>

<?php get_footer() ?>