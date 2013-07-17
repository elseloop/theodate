<?php

/**
  * homepage: current issue
  */


  $current_issue_id = get_current_issue_id();
  $current_issue_meta = theo_get_issue_meta( $current_issue_id );

?><div class="row">
  
  <div class="current-issue-wrap">

    <div class="large-6 columns issue-cover">
      <img src="<?php echo $current_issue_meta['cover']['sizes']['large']; ?>" alt="<?php echo strip_tags( $current_issue_meta['cover_credits'] ); ?>">
    </div>
    
    <div class="large-6 columns issue-highlights">
      <h2>Current Issue</h2>
      <h3 class="subtitle">Issue <?php echo $current_issue_meta['vol_no'] . ', ' . $current_issue_meta['date']; ?></h3>
      <?php echo $current_issue_meta['home_desc']; ?>
      <p><a href="<?php echo get_permalink( $current_issue_id ); ?>" class="button">Read full issue &rarr;</a></p>
    </div>
  
  </div> <?php // /.issue-wrap ?>

</div> <?php // /.row ?>