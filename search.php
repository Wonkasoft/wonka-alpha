<?php  get_header(); ?>
<content class="content-wrap text-center wa-search-results"> <!-- For Main Content Area -->
         <div class="row"> <!-- First Line of content-->
           <div class="small-12 small-centered columns wa-content-text">
              <?php 
              if( have_posts() ):
                while( have_posts() ): the_post(); ?>
                  <?php get_template_part('content', 'search'); ?>
                <?php endwhile;
              endif; ?>
           </div>
        </div>
</content>
<?php get_footer(); ?>