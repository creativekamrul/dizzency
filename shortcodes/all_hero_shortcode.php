<?php

add_shortcode('all_hero_area', 'dizzency_all_hero_area');

function dizzency_all_hero_area($one, $two)
{

    $all_hero_atts = shortcode_atts([

        'all_hero_area_header' => '',
        'all_hero_area_sub_header' => '',
        'all_hero_area_background_color' => '',
        'all_hero_area_header_color' => '',
        'all_hero_area_header_size' => '',
        'all_hero_area_sub_header_color' => '',
        'all_hero_area_sub_header_size' => '',


    ], $one);

    ob_start();
?>

    <header id="gtco-header" class="gtco-cover gtco-cover-xs gtco-inner" role="banner">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="row">
                                <div class="col-md-8">
                                    <h1 class="no-margin"><?php echo $all_hero_atts['all_hero_area_header'] ?></h1>
                                    <p><?php echo $all_hero_atts['all_hero_area_sub_header'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <style>
        #gtco-header h1 {
            color: <?php echo $all_hero_atts['all_hero_area_header_color'] ?> !important;
            font-size: <?php echo $all_hero_atts['all_hero_area_header_size'] ?>px !important
        }

        #gtco-header {
            background: <?php echo $all_hero_atts['all_hero_area_background_color'] ?> !important
        }
    </style>

<?php
    return ob_get_clean();
}

vc_map([
    'base'            => 'all_hero_area',
    'name'            => 'All Hero Section',
    'category'        => 'Dizzency Blocks',
    'params'        => [
        [
            'param_name'    =>  'all_hero_area_header',
            'type'          =>  'textfield',
            'heading'       =>  'Area Header',
        ],

        [
            'param_name'    =>  'all_hero_area_sub_header',
            'type'          =>  'textarea',
            'heading'       =>  'Area Sub Header',
        ],

        [
            'param_name'    =>  'all_hero_area_background_color',
            'type'          =>  'colorpicker',
            'heading'       =>  'Area Background Color',
            'description'   =>  'For Gradient Write The CSS Code After Backgroud Attribute In CSS',
            'group'         =>  'Design Options',
        ],

        [
            'param_name'    =>  'all_hero_area_header_color',
            'type'          =>  'colorpicker',
            'heading'       =>  'Area Header Text Color',
            'group'         =>  'Design Options',
        ],
        [
            'param_name'    =>  'all_hero_area_header_size',
            'type'          =>  'textfield',
            'heading'       =>  'Area Header Font Size',
            'group'         =>  'Design Options',
        ],

        [
            'param_name'    =>  'all_hero_area_sub_header_color',
            'type'          =>  'colorpicker',
            'heading'       =>  'Area Sub Header Text Color',
            'group'         =>  'Design Options',
        ],
        [
            'param_name'    =>  'all_hero_area_sub_header_size',
            'type'          =>  'textfield',
            'heading'       =>  'Area Sub Header Font Size',
            'group'         =>  'Design Options',
        ],

    ],
]);


?>