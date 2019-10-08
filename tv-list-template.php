<?php
/**
* Template Name: List Page
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
					<div class="text-left offset-1">
						<dl class="terms-list">
							<div class="container">
								<?php $list_group =  get_field('list_group');
								if($list_group):
								foreach($list_group as $list_groupss): ?>
								<h1 align="center"><?php echo $list_groupss['list_title'];  ?></h1>
								<hr class="line-1">
								<div class="row">
									
									<?php $marked_list = $list_groupss['marked_list'];
									foreach($marked_list as $marked_listsss ):  ?>
									<div class="col-md-4">
										<ul class="marked-list">
											<?php  $list_items = $marked_listsss['list_items'];
											foreach($list_items as $list_itemsssss): ?>
											<li><i class="fas fa-angle-double-right"></i> <?php echo $list_itemsssss['list_item']; ?></li>
											<?php endforeach;  ?>
										</ul>
									</div>
									<?php endforeach; ?>
								</div>
								<?php endforeach; endif; ?>
							</div>
						</dl>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();