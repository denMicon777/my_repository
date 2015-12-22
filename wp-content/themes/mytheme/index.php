<?php get_header() ?>
    
	<div class="row">
	  <div class="col-md-8">
		<?php while ( have_posts() ) : the_post() ?>

		  <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
		
		<?php if(has_post_thumbnail()) { ?>
		  <div class="post-thumbnail">
	        <a href="<?php the_permalink() ?>" title="<?=the_title_attribute(); ?>"><?=the_post_thumbnail('thumbnail');?></a>
          </div>
		<?php } ?>
		
		  <p><?php the_content('читать далее') ?></p>
		  
		  <?php if(comments_open()) { ?>
		    <a href="<?php the_permalink() ?>#comments">
		      <p><?=comments_number('Нет комментариев', 'Один комментарий', 'Комментарии(%)');?></p>
			</a>
		  <?php } ?>	
			
		  <hr>
  
		<?php endwhile ?>
    
	    <div class="row">
	      <div class="col-md-12 text-center">
		    <?php pagination(); ?>
		  </div>
		</div>
		
	  </div>
	  
	  <?php get_template_part('sidebar'); ?>
	  
    </div>

<?php get_footer() ?>