 <?php

    add_shortcode('client_area', 'dizzency_client_area');

    function dizzency_client_area($one, $two)
    {

        $client_atts = shortcode_atts([], $one);

        ob_start();
    ?>
     <div class="gtco-client">
         <div class="gtco-container">
             <div class="row">
                 <?php
                    $client_post = new WP_Query([
                        'post_type'            => 'client_post',
                        'posts_per_page'    => 6,
                    ]);
                    while ($client_post->have_posts()) : $client_post->the_post()
                    ?>



                     <div class="col-md-2 col-md-offset-1 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0">
                         <img src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_title() ?>" class="img-responsive">
                     </div>



                 <?php endwhile;
                    wp_reset_query(); ?>

             </div>
         </div>
     </div>
    <?php
        return ob_get_clean();
    }

    vc_map([
        'base'            => 'client_area',
        'name'            => 'Clients',
        'category'        => 'Dizzency Blocks',
        'params'        => [],
    ]);


    ?>