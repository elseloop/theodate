<?php
$issue_id     = get_template_part_data();
$issue_poems  = get_issue_ekphrasis( $issue_id ); // wp obj
if( $issue_poems && $issue_poems->have_posts() ) {

  ?><h3 class="subtitle">Ekphrasis</h3><?php

  while( $issue_poems->have_posts() ) {
    $issue_poems->the_post();

    ?><p class="poem-title"><a href="<?php the_permalink(); ?>">&ldquo;<?php the_title(); ?>&rdquo;</a></p><?php

    $poet = get_single_poet( get_the_ID() );
    
    if( $poet && $poet->have_posts() ) {
      while( $poet->have_posts() ) {
        $poet->the_post();

        ?><p class="poem-author"><?php the_title(); ?></p><?php

      } // endwhile poet

    } // endif poet

    wp_reset_postdata();

  } // endwhile issue_poems

  wp_reset_postdata();

} // endif issue_poems