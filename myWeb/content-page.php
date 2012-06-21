
<div class="tablo" style="border:#FF0 solid 2px">
  <h1 class="">Allameh English Institute</h1>
</div>


<?php  
   	if(have_posts()){
		while(have_posts()){
			the_post();
   ?>
<div class="info" style="border:#F0F solid 2px">
<h1><?php the_title();?></h1>
	<p><?php the_content();?></p>
 </div>	
 <?php }
	}else {
	 	echo 'We have not post';
	 }
 ?>
