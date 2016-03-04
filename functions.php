<?php
add_filter('nhp-opts-sections', 'testing');

function testing($sections)
{
    $sections[8] = array(
                    'icon' => 'fa-home',
                    'title' => __('About Us', 'hokindo'),
                    'desc' => __('<p class="description">From here, you can control Latest Tweets section on Homepage. (Same settings will be used if you have enabled Tweets section on Single Posts.)', 'mythemeshop'),
                    'fields' => array(
                        array(
                            'id' => 'homepage_about_heading',
                            'type' => 'text',
                            'title' => __( 'Heading', 'hokindo' )
                        ),
                        array(
                            'id' => 'homepage_about_sub_heading',
                            'type' => 'textarea',
                            'title' => __( 'Description', 'hokindo' )
                        ),
                        array(
                            'id'    => 'homepage_about_button',
                            'type'  => 'button_set',
                            'title' => __( 'Button Url', 'hokindo' )
                            ),
                        array(
                            'id' => 'homepage_about_background_color',
                            'type' => 'color',
                            'title' => __( 'Background Color', 'hokindo' ),
                            'sub_desc' => __( 'Edit the background color for the section', 'hokindo' ),
                            'std' => '#f87a85'
                        ),
                        array(
                            'id' => 'mts_homepage_about_background_pattern',
                            'type' => 'radio_img',
                            'title' => __('Background Pattern', 'hokindo'), 
                            'sub_desc' => __('Choose one from the <strong>37</strong> awesome background patterns.', 'hokindo'),
                            'options' => array(
                                            'nobg' => array('img' => NHP_OPTIONS_URL.'img/patterns/nobg.png'),
                                            'pattern0' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern0.png'),
                                            'pattern1' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern1.png'),
                                            'pattern2' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern2.png'),
                                            'pattern3' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern3.png'),
                                            'pattern4' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern4.png'),
                                            'pattern5' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern5.png'),
                                            'pattern6' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern6.png'),
                                            'pattern7' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern7.png'),
                                            'pattern8' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern8.png'),
                                            'pattern9' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern9.png'),
                                            'pattern10' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern10.png'),
                                            'pattern11' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern11.png'),
                                            'pattern12' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern12.png'),
                                            'pattern13' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern13.png'),
                                            'pattern14' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern14.png'),
                                            'pattern15' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern15.png'),
                                            'pattern16' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern16.png'),
                                            'pattern17' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern17.png'),
                                            'pattern18' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern18.png'),
                                            'pattern19' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern19.png'),
                                            'pattern20' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern20.png'),
                                            'pattern21' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern21.png'),
                                            'pattern22' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern22.png'),
                                            'pattern23' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern23.png'),
                                            'pattern24' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern24.png'),
                                            'pattern25' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern25.png'),
                                            'pattern26' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern26.png'),
                                            'pattern27' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern27.png'),
                                            'pattern28' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern28.png'),
                                            'pattern29' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern29.png'),
                                            'pattern30' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern30.png'),
                                            'pattern31' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern31.png'),
                                            'pattern32' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern32.png'),
                                            'pattern33' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern33.png'),
                                            'pattern34' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern34.png'),
                                            'pattern35' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern35.png'),
                                            'pattern36' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern36.png'),
                                            'pattern37' => array('img' => NHP_OPTIONS_URL.'img/patterns/pattern37.png'),
                                            'hbg' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg.png'),
                                            'hbg2' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg2.png'),
                                            'hbg3' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg3.png'),
                                            'hbg4' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg4.png'),
                                            'hbg5' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg5.png'),
                                            'hbg6' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg6.png'),
                                            'hbg7' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg7.png'),
                                            'hbg8' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg8.png'),
                                            'hbg9' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg9.png'),
                                            'hbg10' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg10.png'),
                                            'hbg11' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg11.png'),
                                            'hbg12' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg12.png'),
                                            'hbg13' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg13.png'),
                                            'hbg14' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg14.png'),
                                            'hbg15' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg15.png'),
                                            'hbg16' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg16.png'),
                                            'hbg17' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg17.png'),
                                            'hbg18' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg18.png'),
                                            'hbg19' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg19.png'),
                                            'hbg20' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg20.png'),
                                            'hbg21' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg21.png'),
                                            'hbg22' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg22.png'),
                                            'hbg23' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg23.png'),
                                            'hbg24' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg24.png'),
                                            'hbg25' => array('img' => NHP_OPTIONS_URL.'img/patterns/hbg25.png')
                                                ),
                            'std' => 'nobg'
                            ),
                        array(
                            'id' => 'homepage_twitter_background_image',
                            'type' => 'upload',
                            'title' => __( 'Background Image', 'hokindo' ),
                            'sub_desc' => __( 'Edit the background image for the section', 'hokindo' ),
                        ),
                        array(
                            'id' => 'homepage_twitter_parallax',
                            'type' => 'button_set',
                            'options' => array('0' => 'Off','1' => 'On'),
                            'std' => '0',
                            'title' => __( 'Enable Parallax Background', 'hokindo' ),
                            'sub_desc' => __( 'Controls whether the background image has parallax scrolling enabled.', 'hokindo' ),
                        ),
                        array(
                            'id' => 'homepage_twitter_slider',
                            'type' => 'button_set',
                            'options' => array('0' => 'Off','1' => 'On'),
                            'std' => '0',
                            'title' => __( 'Auto rotation', 'hokindo' ),
                            'sub_desc' => __( 'Checking this option will enable auto rotation of multiple tweets', 'hokindo' ),
                        ),
                    )
                );
    return $sections;

}