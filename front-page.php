<?php

/**
  * homepage template
  */

get_header();

get_template_part( 'templates/home', 'issue' );

?><div class="row">

  <hr class="rule  rule--ornament rule--spaced" data-ornament="§">

</div><?php

?><div class="row">
    
    <div class="large-8 large-centered columns"><img src="http://placehold.it/800x100" alt="ad"></div>

  </div><?php

get_template_part( 'templates/home', 'widgets' );

get_footer();