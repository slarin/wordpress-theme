<!--header-->
<?php get_header(); ?>

  <div class="grid-cont">
    <div class="header rnd-edges">
      <div class="site-deets">
        <h4><?php echo get_bloginfo( 'name' ); ?></h4>
        <p><?php echo get_bloginfo( 'description' ); ?></p>
      </div>
      Welcome!
    </div>
    <!--sidebar-->
    <?php get_sidebar(); ?>
    <!--content-->
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'content-single', get_post_format() );
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif; 
      endwhile; endif;
    ?>
    <!--footer-->
    <?php get_footer(); ?>
</body>

</html>