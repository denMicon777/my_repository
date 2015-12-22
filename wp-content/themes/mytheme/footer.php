

<nav class="navbar navbar-default" role="navigation">
	
	<?php wp_nav_menu([
	  'container' => 'div',
	  'container_class' => 'collapse navbar-collapse',
	  'container_id' => 'bs-example-navbar-collapse-1',
	  'menu_class' => 'nav navbar-nav',
	  'theme_location' => 'footer_menu',
	]); ?>
	
</nav>
    
	<div class="footer">
	  <div class="row">
	    <div class="col-md-8">
          <?=ot_get_option('phone','Пока нет ничего'); ?>
	    </div>
	  </div>
	</div>
	
  </div>
</div>

<?php wp_footer() ?>
</body>
</html>