<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
              

              </dl>
              
            </div>
          </div>


          <?php endwhile; ?>






        </div>
      </div>
    </section>
  </main>

<?php get_footer();
