<?php get_header(); ?>

    <section class="content-aside-wrapper">
        <section class="content">
            <div class="slogan">
                <p>"Ability may get you to the top, but it takes character to keep you there."</p>
                <span>John Wooden</span>
            </div>
          

            <!-- Цикл wordpress "Loop" -->
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

           <div class="post-preview">
                    <?php the_post_thumbnail(); ?>
                <div class="post-description">
                    <h2 class="post-title">
                      <a class="article_link" href="<?php the_permalink(); ?>"><?php the_title( ); ?></a>
                    </h2>
                    <p class="post-exerpt"><?php the_excerpt(); ?></p>
                    <p class="post-info">by John Doe  /  8 comments  /  <?php the_date('F j, Y'); ?></p>
                </div>
            </div>  

                <?php endwhile; ?>       

                <!-- Добавляем пагинацию -->
                
            <!--  <?php
                        $big = 999999999; // need an unlikely integer

                        echo paginate_links( array(
                          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                          'format' => '?paged=%#%',
                          'current' => max( 1, get_query_var('paged') ),
                          'total' => $wp_query->max_num_pages,

                          'show_all'     => False,
                          'end_size'     => 0,
                          'mid_size'     => 3,
                          'prev_next'    => True,
                          'prev_text'    => __(''),
                          'next_text'    => __(''),
                          'type'         => 'plain',
                          'add_args'     => False,
                          'add_fragment' => '',
                          'before_page_number' => '',
                          'after_page_number' => ''
                        ) );
                      ?> -->                       
         
 
               <?php else: ?>
                 

               <?php endif; ?>       
          
    </section>


  <?php  get_sidebar(); ?>       
  <?php  get_footer(); ?>


