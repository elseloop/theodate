<?php

// single issue

get_header();

if( have_posts() ) {
  while( have_posts() ) {
    the_post();

    $issue_id   = get_the_id();
    $issue_meta = theo_get_issue_meta( $issue_id );

    ?><div class="issue-wrap row">

        <div class="issue-contents"><?php
          ?><div class="issue-toc small-8 push-4 columns ">
              <h2>Issue <?php echo $issue_meta['vol_no'] . ', ' . $issue_meta['date']; ?></h2><?php

              get_template_part( 'templates/issue', 'poems'     , $issue_id );
              get_template_part( 'templates/issue', 'ekphrasis' , $issue_id );

          ?></div><?php


        //cover details ?>
        <div class="small-4 pull-8 columns">
          <figure class="cover-img clearfix">
            <img src="<?php echo $issue_meta['cover']['sizes']['large']; ?>" alt="<?php echo strip_tags( $issue_meta['cover_credits'] ); ?>">
            <figcaption class="caption">
              <p><?php echo $issue_meta['cover_credits']; ?></p>
            </figcaption>
          </figure>
        </div>

      </div> <?php // /.issue-wrap

  } // endwhle
} // endif

get_footer();