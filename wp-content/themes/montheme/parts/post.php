<div class="card">
          <?php  the_post_thumbnail('post-thumbnail',['class'=>'card-img-top','all'=>'','style'=> 'height:auto;']);  ?>
          <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title"> <?php  the_title();  ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"> <?php  the_category();  ?></h6>
            
            <ul>
            <?php  
            the_terms(get_the_ID(), 'sport','<li>','</li><li>','</li>');
            ?>
            </ul>
          
            <p class="card-text">
            <?php  the_content('En voir plus');  ?>
            </p>
            <a href=" <?php  the_permalink();  ?>" class="card-link">Voir Plus</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
</div>