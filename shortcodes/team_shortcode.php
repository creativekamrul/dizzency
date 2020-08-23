<?php

add_shortcode('about_team_area', 'dizzency_about_team_area');

function dizzency_about_team_area($one, $two)
{

    $about_team_atts = shortcode_atts([

        'about_team_area_header' => '',
        'about_team_area_sub_header' => '',


    ], $one);

    ob_start();
?>
    <div class="gtco-services gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 gtco-heading text-center">
                    <h2><?php echo $about_team_atts['about_team_area_header'] ?></h2>
                    <p><?php echo $about_team_atts['about_team_area_sub_header'] ?></p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="">
                        <?php
                        $team_area = new WP_Query([
                            'post_type'            => 'team_post',
                            'posts_per_page'    => 100,
                        ]);
                        while ($team_area->have_posts()) : $team_area->the_post()
                        ?>


                            <div class="item col-md-4 col-sm-12">
                                <div class="gtco-staff">
                                    <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="" class="img-responsive">
                                    <h2><?php echo the_title(); ?></h2>

                                    <p class="role"><?php if (function_exists('the_field')) {
                                                        the_field('member_role');
                                                    } ?></p>
                                                    
                                    <?php echo the_content(); ?>
                                        <ul class="fh5co-social">

                                            <li><a href="<?php if (function_exists('the_field')) {
                                                                the_field('team_facebook_link');
                                                            } ?>"><i class="icon-facebook"></i></a></li>

                                            <li><a href="<?php if (function_exists('the_field')) {
                                                                the_field('team_twitter_link');
                                                            } ?>"><i class="icon-twitter"></i></a></li>

                                            <li><a href="<?php if (function_exists('the_field')) {
                                                                the_field('team_linkedin_link');
                                                            } ?>"><i class="icon-linkedin"></i></a></li>
                                        </ul>
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
    'base'            => 'about_team_area',
    'name'            => 'Team Section',
    'category'        => 'Dizzency Blocks',
    'params'        => [
        [
            'param_name'    =>  'about_team_area_header',
            'type'          =>  'textfield',
            'heading'       =>  'Area Header',
        ],

        [
            'param_name'    =>  'about_team_area_sub_header',
            'type'          =>  'textarea',
            'heading'       =>  'Area Sub Header',
        ],

    ],
]);


?>