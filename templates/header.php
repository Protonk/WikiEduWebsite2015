<header class="banner" role="banner">
  <div class="container header-inner">
    <a class="brand hidden-xs" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="global-nav navbar navbar-right" role="navigation">
      <a class="brand visible-xs mobile-version" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
      <?php get_template_part('templates/searchform', 'header'); ?>
    </nav>

  </div>
</header>
