<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tvivalves
 */

get_header(); ?>

	<main>
    <section class="well-md">
      <div class="container">
        <div class="row">



          <?php while(have_posts()): the_post(); ?>
          <div class="col-xs-12">
            <h1><?php the_title(); ?></h1>
            <hr class="line-1">
            <div class="text-left offset-1">
              <dl class="terms-list">
               

               <?php the_content(); ?>
              

              <br>
          <br>
          <br>

              </dl>
              
            </div>
          </div>


          <?php endwhile; ?>






        </div>
      </div>
    </section>
  </main>


	

<?php get_footer();
