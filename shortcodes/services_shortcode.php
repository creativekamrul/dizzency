<?php

add_shortcode('services_area', 'dizzency_services_area');

function dizzency_services_area($one, $two)
{

    $services_atts = shortcode_atts([

        'services_area_header'      => '',
        'services_area_sub_header'      => '',
        'services_area_button_text'      => '',
        'services_area_button_link'      => '',
        'services_area_header_font_size'      => '',
        'services_area_header_color'      => '',
        'services_area_sub_header_font_size'      => '',
        'services_area_sub_header_color'      => '',
        'services_area_button_background'      => '',
        'services_area_button_font_size'      => '',
        'services_area_button_text_color'      => '',
        'services_area_button_border_color'      => '',
        'services_area_button_border_size'      => '',
        'services_area_post_title_size'      => '',
        'services_area_post_title_color'      => '',


    ], $one);

    ob_start();
?>
    <div class="gtco-services gtco-section dizzency_service_section">
        <div class="gtco-container">
            <div class="row row-pb-sm">
                <div class="col-md-8 col-md-offset-2 gtco-heading text-center dizz_serv_head">
                    <h2><?php echo $services_atts['services_area_header'] ?></h2>
                    <p class="dizz_serv_sub_head"><?php echo $services_atts['services_area_sub_header'] ?></p>
                    <p><a href="<?php echo $services_atts['services_area_button_link'] ?>" class="btn btn-special popup-vimeo"><?php echo $services_atts['services_area_button_text'] ?></a></p>
                </div>
            </div>
            <div class="row row-pb-md">

                <?php
                $services_area = new WP_Query([
                    'post_type'            => 'services_area',
                    'posts_per_page'    => 9,
                ]);
                while ($services_area->have_posts()) : $services_area->the_post()
                ?>




                    <div class="col-md-4 col-sm-4 service-wrap">
                        <div class="service">
                            <h3><i class="<?php
                                            if (function_exists('the_field')) {
                                                the_field('service_icon_class');
                                            }
                                            ?>"></i> <?php echo the_title(); ?></h3>
                            <p> <?php echo wp_trim_words(get_the_content(), 100, false) ?> </p>
                        </div>
                    </div>



                <?php endwhile;
                wp_reset_query(); ?>

                <div class="clearfix visible-md-block visible-sm-block"></div>

            </div>
        </div>
    </div>


    <!-- Dynamic Styles Starts-->
    <style>
        .dizzency_service_section .dizz_serv_head h2 {
            font-size: <?php echo $services_atts['services_area_header_font_size'] ?>px !important;
            color: <?php echo $services_atts['services_area_header_color'] ?> !important;
        }

        .dizzency_service_section .dizz_serv_sub_head {
            font-size: <?php echo $services_atts['services_area_sub_header_font_size'] ?>px !important;
            color: <?php echo $services_atts['services_area_sub_header_color'] ?> !important;
        }

        .dizzency_service_section a {

            font-size: <?php echo $services_atts['services_area_button_font_size'] ?>px !important;
            background-color: <?php echo $services_atts['services_area_button_background'] ?> !important;
        }

        .dizzency_service_section .btn {
            color: <?php echo $services_atts['services_area_button_text_color'] ?> !important;
        }

        .dizzency_service_section h3 {
            font-size: <?php echo $services_atts['services_area_post_title_size'] ?>px !important;
            color: <?php echo $services_atts['services_area_post_title_color'] ?> !important;
        }

        .dizzency_service_section .btn-special {
            border: <?php echo $services_atts['services_area_button_border_size'] ?>px solid <?php echo $services_atts['services_area_button_border_color'] ?> !important
        }
    </style>
    <!-- Dynamic Styles Ends-->

<?php
    return ob_get_clean();
}

vc_map([
    'base'            => 'services_area',
    'name'            => 'Services',
    'category'        => 'Dizzency Blocks',
    'params'        => [
        [
            'param_name'    =>  'services_area_header',
            'type'          =>  'textfield',
            'heading'       =>  'Area Header',
        ],

        [
            'param_name'    =>  'services_area_sub_header',
            'type'          =>  'textarea',
            'heading'       =>  'Area Sub Header',
        ],
        [
            'param_name'    =>  'services_area_button_text',
            'type'          =>  'textfield',
            'heading'       =>  'Button Text',
        ],

        [
            'param_name'    =>  'services_area_button_link',
            'type'          =>  'textfield',
            'heading'       =>  'Button Link',
        ],

        [
            'param_name'    =>  'services_area_header_font_size',
            'type'          =>  'textfield',
            'heading'       =>  'Header Font Size',
            'group'       =>  'Design Options',
        ],

        [
            'param_name'    =>  'services_area_header_color',
            'type'          =>  'colorpicker',
            'heading'       =>  'Header Text Color',
            'group'       =>  'Design Options',
        ],

        [
            'param_name'    =>  'services_area_sub_header_font_size',
            'type'          =>  'textfield',
            'heading'       =>  'Sub Header Font Size',
            'group'       =>  'Design Options',
        ],

        [
            'param_name'    =>  'services_area_sub_header_color',
            'type'          =>  'colorpicker',
            'heading'       =>  'Sub Header Text Color',
            'group'       =>  'Design Options',
        ],

        [
            'param_name'    =>  'services_area_button_background',
            'type'          =>  'colorpicker',
            'heading'       =>  'Button Background Color',
            'group'       =>  'Design Options',
        ],

        [
            'param_name'    =>  'services_area_button_font_size',
            'type'          =>  'textfield',
            'heading'       =>  'Button Font Size',
            'group'       =>  'Design Options',
        ],

        [
            'param_name'    =>  'services_area_button_text_color',
            'type'          =>  'colorpicker',
            'heading'       =>  'Button Text Color',
            'group'       =>  'Design Options',
        ],

        [
            'param_name'    =>  'services_area_button_border_color',
            'type'          =>  'colorpicker',
            'heading'       =>  'Button Border Color',
            'group'       =>  'Design Options',
        ],

        [
            'param_name'    =>  'services_area_button_border_size',
            'type'          =>  'textfield',
            'heading'       =>  'Button Border Size',
            'group'       =>  'Design Options',
        ],
        [
            'param_name'    =>  'services_area_post_title_size',
            'type'          =>  'textfield',
            'heading'       =>  'Post Title Font Size',
            'group'       =>  'Design Options',
        ],

        [
            'param_name'    =>  'services_area_post_title_color',
            'type'          =>  'colorpicker',
            'heading'       =>  'Post Title text Color',
            'group'       =>  'Design Options',
        ],


    ],
]);


?>