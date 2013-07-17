<?php

/**
  * homepage: widget row (bottom bit)
  */

?><div class="row widget-row">    
    
    <div class="large-4 columns widget--blog-feed"><?php
      
        $recent_posts   = get_posts( array( 'numberposts' => 3 ) );

        if ( $recent_posts ) {

          ?><h2>Latest News</h2>
            <ul class="unstyled"><?php
          
              foreach( $recent_posts as $post ) {

                setup_postdata( $post );
                $excerpt = get_the_excerpt() . "<br><a href='" . get_permalink() . "'>Read More &rarr;</a>";

                ?><li>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p><?php echo $excerpt; ?></p>
                  </li><?php

              } // endforeach recent posts

          ?></ul><?php

        } // endif recent posts
        
    ?></div>
  
    <div class="large-4 columns ad--widget">
      Ad space with Sunken Garden anthology fallback (or permanant Sunken Garden Anthology Ad)
    </div>
  
    <div class="large-4 columns">
      <h2>
        Submit to <em>Theodate</em>
      </h2>
      <p>Itaque quasi velit eligendi enim pariatur suscipit deserunt provident quo eos dolore dolorem expedita.</p>
      <p><a class="btn btn--sm" href="#">Submit now &rarr;</a></p>
    </div>

  </div>