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
    
    <!--content-->
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'content', get_post_format() ); 
      endwhile; endif;
    ?>
    <!--footer-->
    <?php get_footer(); ?>
</body>

</html>