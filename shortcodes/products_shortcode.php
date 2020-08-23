<?php

add_shortcode('product_area', 'dizzency_product_area');

function dizzency_product_area($one, $two)
{

    $services_atts = shortcode_atts([

        'product_area_header'      => '',
        'product_area_sub_header'      => '',
        'product_area_button_text'      => '',
        'product_area_button_link'      => '',


    ], $one);

    ob_start();
?>


    <div class="gtco-section gtco-products">
        <div class="gtco-container">
            <div class="row row-pb-sm">
                <div class="col-md-8 col-md-offset-2 gtco-heading text-center">
                    <h2><?php echo $services_atts['product_area_header'] ?></h2>
                    <p><?php echo $services_atts['product_area_sub_header'] ?></p>
                </div>
            </div>
            <div class="row row-pb-md">
                <div class="col-md-4 col-sm-4">
                    <?php
                    $products_area = new WP_Query([
                        'post_type'            => 'product_post',
                        'posts_per_page'    => 9,
                    ]);
                    while ($products_area->have_posts()) : $products_area->the_post()
                    ?>



                        <a href="<?php if (function_exists('the_field')) {
                                        the_field('product_area_link');
                                    } ?>" class="gtco-item two-row bg-img" style="background-color : <?php if (function_exists('the_field')) {
                                                                                                            the_field('product_overlay_color');
                                                                                                        } ?> ">
                            <div class="overlay">
                                <i class="ti-arrow-top-right"></i>
                                <div class="copy">
                                    <h3><?php echo the_title() ?></h3>
                                    <p><?php echo wp_trim_words(get_the_content(), 100, false) ?></p>
                                </div>
                            </div>
                            <img src="<?php echo the_post_thumbnail_url(); ?>" class="hidden" alt="">
                        </a>

                    <?php endwhile;
                    wp_reset_query(); ?>



                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><a href="<?php echo $services_atts['product_area_button_link'] ?>" target="_blank" class="btn btn-special"><?php echo $services_atts['product_area_button_text'] ?></a></p>
                </div>
            </div>
        </div>
    </div>



<?php
    return ob_get_clean();
}

vc_map([
    'base'            => 'product_area',
    'name'            => 'Products',
    'category'        => 'Dizzency Blocks',
    'params'        => [
        [
            'param_name'    =>  'product_area_header',
            'type'          =>  'textfield',
            'heading'       =>  'Area Header',
        ],

        [
            'param_name'    =>  'product_area_sub_header',
            'type'          =>  'textarea',
            'heading'       =>  'Area Sub Header',
        ],
        [
            'param_name'    =>  'product_area_button_text',
            'type'          =>  'textfield',
            'heading'       =>  'Button Text',
        ],
        [
            'param_name'    =>  'product_area_button_link',
            'type'          =>  'textfield',
            'heading'       =>  'Button Link',
        ],

    ],
]);


?>