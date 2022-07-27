<?php  get_header()   ?>

<?php if (have_posts()):  while( have_posts()):  the_post(); ?> 
 <h1> <?php  the_title() ?> </h1>

 <?php  if (get_post_meta( get_the_ID(), SponsoMetabox::META_KEY, true) == '1'):  ?>

 <div class="alert alert-info"> Cet article est sponsorise</div>

 <?php endif ?>
 
 <p>

 <img src=" <?php the_post_thumbnail_url(); ?>" alt="" sytle=" whitde:50; heigth:50;">
 </p>

 


 <?php  the_content() ?> 
   <?php  endwhile; endif;  ?> 
    
<?php  get_footer()   ?>+