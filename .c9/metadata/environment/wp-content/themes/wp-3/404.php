{"filter":false,"title":"404.php","tooltip":"/wp-content/themes/wp-3/404.php","undoManager":{"mark":6,"position":6,"stack":[[{"start":{"row":0,"column":0},"end":{"row":21,"column":22},"action":"insert","lines":["<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>","","<div class=\"container\">","   <div class=\"blog\">","   \t<div class=\"col-md-9\">","\t\t   <div class=\"blog_left single_left\">","\t\t\t      ","            <?php while(have_posts()): the_post(); ?>","             <h3><a href=\"<?php the_permalink(); ?>\" title=\"<?php the_title_attribute(); ?>\"><?php the_title(); ?></a></h3>","             <h4><span>Posted：<a href=\"<?php the_permalink(); ?>\">","            <time datetime=\"<?php the_time('y-m-d'); ?>\"></time>","            <?php the_time( get_option('date_format') ); ?></a></span>","             </h4>","             <?php the_content(); ?>","            <?php endwhile; ?>","\t\t\t ","     </div>","    </div>\t","    <?php get_sidebar(); ?>","  </div>","</div>","<?php get_footer(); ?>"],"id":1}],[{"start":{"row":7,"column":12},"end":{"row":14,"column":30},"action":"remove","lines":["<?php while(have_posts()): the_post(); ?>","             <h3><a href=\"<?php the_permalink(); ?>\" title=\"<?php the_title_attribute(); ?>\"><?php the_title(); ?></a></h3>","             <h4><span>Posted：<a href=\"<?php the_permalink(); ?>\">","            <time datetime=\"<?php the_time('y-m-d'); ?>\"></time>","            <?php the_time( get_option('date_format') ); ?></a></span>","             </h4>","             <?php the_content(); ?>","            <?php endwhile; ?>"],"id":2}],[{"start":{"row":7,"column":12},"end":{"row":12,"column":6},"action":"insert","lines":["<h3>SORRY !</h3>","<p>Document or file requested was not found...</p>","<h2>404</h2>","<div class=\"back-to-home\">","  <a href=\"<?php echo home_url(); ?>\">Go Back to Home</a>","</div>"],"id":3}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "],"id":4},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "],"id":5},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "],"id":6},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "],"id":7},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":11},"end":{"row":15,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1599735466972,"hash":"1d7023095b62877a5c08754b918f0310c7e66119"}