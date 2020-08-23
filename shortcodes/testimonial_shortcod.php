<?php

add_shortcode('testimonial_area', 'dizzency_testimonial_area');

function dizzency_testimonial_area($one, $two)
{

    $testimonial_atts = shortcode_atts([

        'testimonial_area_header'      => '',
        'testimonial_area_sub_header'      => '',


    ], $one);

    ob_start();
?>

    <div class="gtco-section gtco-testimonial gtco-gray">
        <div class="gtco-container">

            <div class="row row-pb-sm">
                <div class="col-md-8 col-md-offset-2 gtco-heading text-center">
                    <h2><?php echo $testimonial_atts['testimonial_area_header'] ?></h2>
                    <p><?php echo $testimonial_atts['testimonial_area_sub_header'] ?></p>
                </div>
            </div>
            <div class="row">

                <?php
                $testimonial_area = new WP_Query([
                    'post_type'            => 'testimonial_area',
                    'posts_per_page'        => 8,
                ]);
                while ($testimonial_area->have_posts()) : $testimonial_area->the_post()
                ?>


                    <div class="col-md-6 col-sm-6">
                        <div class="gtco-testimony gtco-left">
                            <div><img src="<?php echo the_post_thumbnail_url('full'); ?>" alt=""></div>
                            <blockquote>
                                <p><?php echo the_content(); ?><cite class="author">&mdash; <?php echo the_title(); ?></cite></p>
                            </blockquote>
                        </div>
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
    'base'            => 'testimonial_area',
    'name'            => 'Testimonials',
    'category'        => 'Dizzency Blocks',
    'params'        => [

        [
            'param_name'        =>  'testimonial_area_header',
            'type'              =>  'textfield',
            'heading'        =>  'Area Header',
        ],

        [
            'param_name'        =>  'testimonial_area_sub_header',
            'type'              =>  'textarea',
            'heading'           =>  'Area Sub Header',
        ],
    ],
]);


?>