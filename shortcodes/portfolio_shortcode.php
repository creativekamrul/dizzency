<?php

add_shortcode('portfolio_area', 'dizzency_portfolio_area');

function dizzency_portfolio_area($one, $two)
{

    $portfolio_atts = shortcode_atts([

        'portfolio_area_header' => '',
        'portfolio_area_sub_header' => '',


    ], $one);

    ob_start();
?>


    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 gtco-heading text-center">
                    <h2>Check Our Works</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt volutpat erat.</p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="">
                        <?php
                        $portfolio_area = new WP_Query([
                            'post_type'            => 'portfolio_post',
                            'posts_per_page'    => 100,
                        ]);
                        while ($portfolio_area->have_posts()) : $portfolio_area->the_post()
                        ?>


                            <div class="item col-md-4 col-sm-12">
                                <div class="gtco-item">
                                    <a href="<?php if (function_exists('the_field')) {
                                                    the_field('portfolio_project_link');
                                                } ?>"><img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="" class="img-responsive"></a>


                                    <h2><a href="<?php if (function_exists('the_field')) {
                                                        the_field('portfolio_project_link');
                                                    } ?>"><?php echo the_title(); ?></h2></a>


                                    <p class="role"><?php echo the_content(); ?></p>
                                </div>
                            </div>



                        <?php endwhile;
                        wp_reset_query(); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>

<?php
    return ob_get_clean();
}

vc_map([
    'base'            => 'portfolio_area',
    'name'            => 'Portfolio Section',
    'category'        => 'Dizzency Blocks',
    'params'        => [
        [
            'param_name'    =>  'portfolio_area_header',
            'type'          =>  'textfield',
            'heading'       =>  'Area Header',
        ],

        [
            'param_name'    =>  'portfolio_area_sub_header',
            'type'          =>  'textarea',
            'heading'       =>  'Area Sub Header',
        ],

    ],
]);


?>