<?php get_header();
	get_template_part('menu','header');
?>
    <div class="contain-main mla mra" style="border:#000 solid 2px">
    
  	<?php get_template_part('content','page')?>
     	<?php
		 if ($page_id=='21') {
  		 get_template_part ('contactus','page');}
	 ?>
    </div>
</div>
<?php get_footer();?>
