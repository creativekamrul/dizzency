<?php

add_shortcode('contact_data', 'dizzency_contact_data_area');

function dizzency_contact_data_area($one, $two)
{

    $contact_data_atts = shortcode_atts([

        'contact_data_area_header' => '',
        'contact_data_area_sub_header' => '',
        'contact_data_area_main_address' => '',
        'contact_data_area_phone' => '',
        'contact_data_area_email' => '',
        'contact_data_area_website' => '',


    ], $one);

    ob_start();
?>

    <div class="gtco-section">
        <div class="gtco-container">
            <div class="col-md-5 col-md-push-1">
                <div class="gtco-contact-info">
                    <h3><?php echo $contact_data_atts['contact_data_area_header'] ?></h3>
                    <p><?php echo $contact_data_atts['contact_data_area_sub_header'] ?></p>
                    <ul>
                        <li class="address"><?php echo $contact_data_atts['contact_data_area_main_address'] ?></li>
                        <li class="phone"><a href="tel://<?php echo $contact_data_atts['contact_data_area_phone'] ?>"><?php echo $contact_data_atts['contact_data_area_phone'] ?></a></li>
                        <li class="email"><a href="<?php echo $contact_data_atts['contact_data_area_email'] ?>"><?php echo $contact_data_atts['contact_data_area_email'] ?></a></li>
                        <li class="url"><a href="<?php echo $contact_data_atts['contact_data_area_website'] ?>"><?php echo $contact_data_atts['contact_data_area_website'] ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>





<?php
    return ob_get_clean();
}

vc_map([
    'base'            => 'contact_data',
    'name'            => 'Contact Data',
    'category'        => 'Dizzency Blocks',
    'params'        => [
        [
            'param_name'    =>  'contact_data_area_header',
            'type'          =>  'textfield',
            'heading'       =>  'Area Header',
        ],
        [
            'param_name'    =>  'contact_data_area_sub_header',
            'type'          =>  'textarea',
            'heading'       =>  'Area Sub Header',
        ],
        [
            'param_name'    =>  'contact_data_area_main_address',
            'type'          =>  'textfield',
            'heading'       =>  'Main Address',
        ],
        [
            'param_name'    =>  'contact_data_area_phone',
            'type'          =>  'textfield',
            'heading'       =>  'Phone Number',
        ],
        [
            'param_name'    =>  'contact_data_area_email',
            'type'          =>  'textfield',
            'heading'       =>  'Email',
        ],
        [
            'param_name'    =>  'contact_data_area_website',
            'type'          =>  'textfield',
            'heading'       =>  'Website',
        ],

    ],
]);


?>