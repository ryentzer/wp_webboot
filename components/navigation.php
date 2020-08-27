<?php
/*
  * Bootstrap navigation goes here
  */

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mr-2" href="<?php
		bloginfo( 'url' ); ?>">Logo here</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		<?php
		wp_nav_menu( array(
			             'theme_location'  => 'navbar',
			             'depth'           => 2,
			             // 1 = no dropdowns, 2 = with dropdowns.
			             'container'       => 'div',
			             'container_class' => 'collapse navbar-collapse',
			             'container_id'    => 'navbarMenu',
			             'menu_class'      => 'navbar-nav ml-auto',
			             'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			             'walker'          => new WP_Bootstrap_Navwalker(),
		             ) );
		?>
    </div>
</nav>
