<?php
/**
* Template Name: Accessories Page
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
				<div class="col-xs-12">
					<?php while(have_posts()): the_post(); ?>
					<h1><?php the_title(); ?></h1>
					 <?php endwhile; ?>
					<hr class="line-1">
					<div class="text-left offset-1">
						<dl class="terms-list">
							<section class="well-md well-md--inset-3 text-left">
								<div class="container">
									<div class="row">



										<?php $accessories_item =  get_field('accessories_item');
										if($accessories_item):
										foreach($accessories_item as $accessoriesitem): ?>

										<div class="col-md-3">
											<h2 class="upper bold"><?php echo $accessoriesitem['item_title']; ?></h2>
											<hr class="line-2" />
											<p><img alt="accuator" src="<?php echo $accessoriesitem['item_image']['url']; ?>" /></p>
											<ul class="marked-list">

												<?php $marked_list_acc =  $accessoriesitem['marked_list_acc']; 
												foreach($marked_list_acc as $marked_list_accss):  ?>
												<li> <?php echo  $marked_list_accss['list_item_acc']; ?></li>
												<?php endforeach; ?>




											</ul>
											<div class="btn-div"><a class="btn-primary" href="<?php echo $accessoriesitem['contact_button']['url']; ?>" ><?php echo $accessoriesitem['contact_button']['title']; ?></a></div>
										</div>

										<?php endforeach; endif; ?>


										

										

									</div>
								</div>
							</section>
						</dl>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();