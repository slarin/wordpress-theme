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
    <!--content-->
    <?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
         get_template_part( 'blog-content', get_post_format() );
        endwhile;?>
        <ul>
          <li><?php next_posts_link( 'Older posts' ); ?></li>
          <li><?php previous_posts_link( 'Newer posts' ); ?></li>
        </ul>
    <?php
      endif;
    ?>
    <!--sidebar-->
    <?php get_sidebar(); ?>
    <!--footer-->
    <?php get_footer(); ?>
</body>

</html>