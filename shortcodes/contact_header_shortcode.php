<?php

add_shortcode('contact_header', 'dizzency_contact_header_area');

function dizzency_contact_header_area($one, $two)
{

    $contact_header_atts = shortcode_atts([

        'contact_area_header' => '',
        'contact_area_sub_header' => '',


    ], $one);

    ob_start();
?>
    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 gtco-heading text-center">
                    <h2><?php echo $contact_header_atts['contact_area_header'] ?></h2>
                    <p><?php echo $contact_header_atts['contact_area_sub_header'] ?></p>
                </div>
            </div>
        </div>
    </div>

        <?php
        return ob_get_clean();
    }

    vc_map([
        'base'            => 'contact_header',
        'name'            => 'Contact Area Header',
        'category'        => 'Dizzency Blocks',
        'params'        => [
            [
                'param_name'    =>  'contact_area_header',
                'type'          =>  'textfield',
                'heading'       =>  'Header',
            ],

            [
                'param_name'    =>  'contact_area_sub_header',
                'type'          =>  'textarea',
                'heading'       =>  'Sub Header',
            ],

        ],
    ]);


        ?>