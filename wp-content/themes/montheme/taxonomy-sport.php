<?php  get_header()   ?>

<h1> <?=  get_queried_object()->name ?></h1>

<p>
<?=  get_queried_object()->description ?>
</p>

<?php  $sports = get_terms(  ['taxonomy' => 'sport'])?>
<ul class="nav nav-pills my-4">
  <?php foreach($sports as $sport): ?>
    <li class="nav-item">
      <a href="<?php get_term_link($sport) ?>" class="nav-link <?= is_tax('sport', $sport->term_id )? 'active': ''  ?> " ><?= $sport -> name ?></a>
    </li>
    <?php endforeach; ?>


</ul>

<?php if (have_posts()):  ?> 
<div class="row">

 <?php  while( have_posts()):  the_post(); ?> 
<div class="col sm-4">
 
  
         <?php  require('parts/post.php') ?>
</div>

    <?php  endwhile  ?> 
    </div>
    <?php  montheme_pagination();  ?> 
    <?php  else:  ?> 
 <h1> Il y a pas d article</h1>
        <?php  endif;  ?> 
    
<?php  get_footer()   ?>