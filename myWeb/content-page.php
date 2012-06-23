
<div class="tablo" >
  <h1 class="">Allameh English Institute</h1>
</div>


<?php  
   	if(have_posts()){
		while(have_posts()){
			the_post();
   ?>
<div class="info">
<h1><?php the_title();?></h1>
	<p><?php the_content();?></p>
 </div>	
 <?php }
	}else {
	 	echo 'We have not post';
	 }
 ?>
