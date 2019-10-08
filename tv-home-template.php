<?php
/**
* Template Name: Home Page
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
	<section class="well-md bg-image-2">
		<div class="container">
			<?php $section_title =  get_field('section_title'); 
				if($section_title): ?>
				<h2><?php echo $section_title; ?></h2>
				<hr class="line-1">
			<?php endif; ?>
			
			<div class="row offset-1">


				<?php $valve_solutions =  get_field('valve_solutions'); 
				if($valve_solutions): 
				foreach($valve_solutions as $solution): ?>
				<div class="col-xs-6 col-sm-4">
					<div class="thumb">
						<?php if($solution['item_imagess']): ?>
						<img src="<?php echo $solution['item_imagess']['url']; ?>" alt="<?php echo $solution['item_imagess']['title']; ?>">
					<?php endif; ?>
						<div class="thumb_overlay">
							<?php echo $solution['item_contentsss']; ?>
							
						</div>
					</div>
				</div>

			<?php endforeach; endif; ?>







			</div>
		</div>
	</section>
	<hr class="line-1">
	<section class="well-md well-md--inset-2">
		<div class="container">
			<?php $section_title_cont =  get_field('section_title_cont'); 
				if($section_title_cont): ?>
			<h2><?php echo $section_title_cont; ?></h2>
			<?php endif; ?>

			<div class="row text-left offset-3">



			<?php $address_information =  get_field('address_information'); 
				if($address_information): ?>
			<div class="col-xs-offset-1 col-xs-8 col-sm-offset-0 col-sm-6 col-md-4">
					<div class="box box--mod-2">
						<div class="box_left">
							<div class="icon icon-lg icon-primary fas fa-map-marker-alt"></div>
						</div>
						<div class="box_cnt">
							<?php echo $address_information; ?>
							

						</div>
				</div>
			</div>
			<?php endif; ?>




			<?php $contact_information =  get_field('contact_information'); 
				if($contact_information): ?>
			<div class="col-xs-offset-1 col-xs-8 col-sm-offset-0 col-sm-6 col-md-4">
				<div class="box box--mod-2">
					<div class="box_left">
						<div class="icon icon-lg icon-primary fas fa-phone-alt"></div>
					</div>
					<div class="box_cnt">

						<?php echo $contact_information; ?>
						
					</div>
				</div>
			</div>
			<?php endif; ?>


			<?php $message_information =  get_field('message_information'); 
				if($message_information): ?>
			<div class="col-xs-offset-1 col-xs-8 col-sm-offset-0 col-sm-6 col-md-4">
				<div class="box box--mod-2">
					<div class="box_left">
						<div class="icon icon-lg icon-primary fas fa-envelope"></div>
					</div>
					<div class="box_cnt">
						<?php echo $message_information; ?>
					
					</div>
				</div>
			</div>
			<?php endif; ?>

		</div>
	</div>
</section>


<?php $signup_background =  get_field('signup_background'); ?>
<section class="well-md medium parallax" style="background-image:url(<?php echo $signup_background['url']; ?>)"  data-mobile="true">
	<div class="container">

		<?php $section_title_sign =  get_field('section_title_sign'); 
			if($section_title_sign): echo $section_title_sign; ?>
		<?php endif; ?>


		<!-- BEGIN: Constant Contact Email List Form Button -->
		<div align="center">

			<?php $button_url =  get_field('button_url'); 
			if($button_url): ?>
			<a href="<?php echo $button_url['url']; ?>" target="_blank" class="btn-primary signups-button"><?php echo $button_url['title']; ?></a>
			<?php endif; ?>

			<!-- BEGIN: Email Marketing you can trust -->
			<?php $you_can_trust_text =  get_field('you_can_trust_text'); 
			if($you_can_trust_text): ?>
			<div id="ctct_button_footer" align="center"><?php echo $you_can_trust_text; ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>



</main>
<?php get_footer();