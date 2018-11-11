<?php get_header(); ?>

<div id="app">
    <section class="hero" id="hero">
        <nav class="topmenu" id="topNav">
            <div class="container">
                <ul>
                    <div class="logo">Gustoso</div>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    <li class="social">
                        <ul>
                            <li class="twitter"><a href="http://twitter.com"></a></li>
                            <li class="facebook"><a href="http://facebook.com"></a></li>
                            <li class="instagram"><a href="http://instagram.com"></a></li>
                        </ul>
                    </li>
                    <a href="javascript:void(0);" class="icon" id="menu-mobile-icon" onclick="menu()">
                        <i class="fa fa-bars"></i>
                    </a>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1><?php the_field('header_text'); ?></h1>
            <div class="dashed-line"></div>
            <p>
                <?php the_field('header_desc'); ?>
            </p>
            <a href="javascript:void(0);"><div class="btn" id="header-menu-btn"><?php the_field('header_button_text'); ?></div></a>
        </div>
        <div class="hero-foot"></div>
    </section>
    <section class="cakes">
        <div class="container">
            <div class="left">
                <h1><?php the_field('left_header_text'); ?></h1>
                <h2><?php the_field('left_header_description'); ?></h2>
                <p>
                    <?php the_field('left_description'); ?>
                </p>
                <h3><?php the_field('left_cook'); ?></h3>
                <div class="cook">
                    <div class="firstname"><?php the_field('left_cook_firstname'); ?></div>
                    <img class="pic" src="<?php the_field('left_cook_image'); ?>">
                    <div class="lastname"><?php the_field('left_cook_lastname'); ?></div>
                </div>
                <div class="quote">
                    <div class="left">“</div>
                    <p>
                        <?php the_field('left_quote'); ?>
                    </p>
                    <div class="right">”</div>
                </div>
            </div>
            <div class="right">
                <img class="top-left" src="<?php the_field('right_first_image'); ?>">
                <img class="top-right" src="<?php the_field('right_second_image'); ?>">
                <img class="bottom-left" src="<?php the_field('right_third_image'); ?>">
                <img class="bottom-right" src="<?php the_field('right_fourth_image'); ?>">
                <div class="middle"><p><?php the_field('right_middle_text'); ?></p></div>
            </div>
        </div>
    </section>
    <section class="pancakes" id="pancakes">
        <div class="container">
            <div class="content clearfix">
                <div class="left">
                    <div class="menu-btn"><img src="<?php echo get_template_directory_uri()?>/src/assets/images/3rd_page/menu.png"></div>
                    <div class="text-bg"></div>
                    <div class="rating">
                        <ul>
                            <li id="rating1" onclick="rating(1)" class="checked"></li>
                            <li id="rating2" onclick="rating(2)" class="checked"></li>
                            <li id="rating3" onclick="rating(3)" class="checked"></li>
                            <li id="rating4" onclick="rating(4)" class="checked"></li>
                            <li id="rating5" onclick="rating(5)" class="unchecked"></li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <h1><?php the_field('pancakes_head_text'); ?></h1>
                    <h2><?php the_field('pancakes_head_desc'); ?></h2>
                    <p><?php the_field('pancakes_text'); ?></p>
                    <div class="slide" id="slider">
                        <ul>
                            <li class="slide-left" id="slide-left"></li>
                            <li class="first-img" id="first-img"><img src="<?php the_field('pancakes_slider_first_image'); ?>" alt=""></li>
                            <li class="second-img" id="second-img"><img src="<?php the_field('pancakes_slider_second_image'); ?>" alt=""></li>
                            <li class="third-img" id="third-img"><img src="<?php the_field('pancakes_slider_third_image'); ?>" alt=""></li>
                            <li class="slide-right" id="slide-right"></li>
                        </ul>
                    </div>
                    <div class="mill"></div>
                </div>
                <div class="ready">
                    <h1><?php the_field('pancakes_ready'); ?></h1>
                    <h2><?php the_field('pancakes_time'); ?></h2>
                    <h3><?php the_field('pancakes_time_mins'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    <section class="breakfast" id="breakfast">
        <a name="menu"></a>
        <div class="container clearfix">
            <div class="left">
                <h1><?php the_field('breakfast_left_header_text'); ?></h1>
                <h2><?php the_field('breakfast_left_header_desc'); ?></h2>
                <div class="menu-item">
                    <h1><?php the_field('menu_item_1_header'); ?></h1>
                    <h2><?php the_field('menu_item_1_desc'); ?></h2>
                    <h3><?php the_field('menu_item_1_price'); ?></h3>
                    <div class="menu-vector"></div>
                </div>
                <div class="menu-item toast-fix">
                    <h1><?php the_field('menu_item_2_header'); ?></h1>
                    <h2><?php the_field('menu_item_2_desc'); ?></h2>
                    <h3><?php the_field('menu_item_2_price'); ?></h3>
                    <div class="menu-vector"></div>
                </div>
                <div class="menu-item muffins-fix">
                    <h1><?php the_field('menu_item_3_header'); ?></h1>
                    <h2><?php the_field('menu_item_3_desc'); ?></h2>
                    <h3><?php the_field('menu_item_3_price'); ?></h3>
                </div>
            </div>
            <div class="right">
                <div class="paper">
                    <p class="est"><?php the_field('breakfast_right_est'); ?></p>
                    <p><?php the_field('breakfast_right_year'); ?></p>
                    <h1><?php the_field('breakfast_right_header'); ?></h1>
                    <div class="desc"><?php the_field('breakfast_right_desc'); ?></div>
                    <div class="btn-read"><a href=""><?php the_field('breakfast_right_read_btn'); ?></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="sandwich">
        <div class="container clearfix">
            <div class="mill"></div>
            <h1><?php the_field('sandwich_header'); ?></h1>
            <h2><?php the_field('sandwich_header_desc'); ?></h2>
            <div class="products">
                <div class="product">
                    <img src="<?php the_field('sandwich_product_1_img'); ?>" alt="">
                    <h1><?php the_field('sandwich_product_1_header'); ?></h1>
                    <p><?php the_field('sandwich_product_1_desc'); ?></p>
                </div>
                <div class="product">
                    <img src="<?php the_field('sandwich_product_2_img'); ?>" alt="">
                    <h1><?php the_field('sandwich_product_2_header'); ?></h1>
                    <p><?php the_field('sandwich_product_2_desc'); ?></p>
                </div>
                <div class="product">
                    <img src="<?php the_field('sandwich_product_3_img'); ?>" alt="">
                    <h1><?php the_field('sandwich_product_3_header'); ?></h1>
                    <p><?php the_field('sandwich_product_3_desc'); ?></p>
                </div>
            </div>
            <div class="picture">
                <img src="<?php the_field('sandwich_large_image'); ?>" alt="" >
                <div id="full-recipe" class="full-recipe">
                    <h1>Full recipe</h1>
                    <p>1.Class aptent</p>
                    <p>2.Nullam dictum</p>
                    <p>3.Sed nibh purus</p>
                    <p>4.Muffins</p>
                    <p>5.Et risus</p><br>
                    <p>Aenean eleifend tellus leo ligula, porttitor eu, consequat vitae.</p>
                </div>
                <div class="btn"><a href="javascript:void(0);" id="recipe-btn"><?php the_field('sandwich_btn_text'); ?></a></div>
                <div class="recipe">
                    <div class="step">
                        <h1><?php the_field('sandwich_preparation_header'); ?></h1>
                        <h2><?php the_field('sandwich_preparation_time'); ?></h2>
                        <h3><?php the_field('sandwich_preparation_mins'); ?></h3>
                    </div>
                    <div class="step">
                        <h1><?php the_field('sandwich_cook_header'); ?></h1>
                        <h2><?php the_field('sandwich_cook_time'); ?></h2>
                        <h3><?php the_field('sandwich_cook_mins'); ?></h3>
                    </div>
                    <div class="step">
                        <h1><?php the_field('sandwich_ready_header'); ?></h1>
                        <h2><?php the_field('sandwich_ready_time'); ?></h2>
                        <h3><?php the_field('sandwich_ready_mins'); ?></h3>
                    </div>
                </div>
            </div>
            <nav>
                <ul>
                    <?php wp_nav_menu( array( 'theme_location' => 'bottom-left-menu') ); ?>
                    <div class="logo">Gustoso</div>
                    <?php wp_nav_menu( array( 'theme_location' => 'bottom-right-menu') ); ?>
                </ul>
            </nav>
        </div>

    </section>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/src/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/src/js/menu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/src/js/slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/src/js/scroll-menu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/src/js/rating.js"></script>
<?php get_footer(); ?>
