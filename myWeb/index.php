<?php get_header();
	get_template_part('menu','header');
?>
    <div class="contain-main mla mra" >
    
  	<?php get_template_part('content','page')?>
     	<?php
		 if ($page_id=='21') {
  		 get_template_part ('contactus','page');}
	 ?>
     <?php 
	 	get_template_part('sidebar','page')
	 
	 ?>
    </div>
</div>
<?php get_footer();?>
