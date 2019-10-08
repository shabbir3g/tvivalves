<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tvivalves
 */

?>
<footer class="bg-image-1 white-color text-left upper medium">
    <div class="container">

       <?php $copy_right_text =  get_field('copy_right_text','options'); 
      if($copy_right_text):  ?>

        <?php echo $copy_right_text; ?>
        
      <?php endif; ?>


      <?php $right_logo_footer =  get_field('right_logo_footer','options'); 
      if($right_logo_footer):  ?>
     <div class="WbenLogo"><img src="<?php echo $right_logo_footer['url']; ?>" alt="<?php echo $right_logo_footer['title']; ?>"> </div>
     <?php endif; ?>
      <ul class="inline-list medium">

         <?php $social_url =  get_field('social_url','options'); 
          if($social_url): 
          foreach($social_url as $social):  ?>
        <li><a href="<?php echo  $social['social_link']['url']; ?>" target="_blank" class=""><?php echo  $social['social_link']['title']; ?></a></li>
        <?php endforeach;  endif; ?>


         


      </ul>
    </div>
  </footer>
</div>

	<?php wp_footer(); ?>
</body>
</html>