<?php
    /*
     * Template Name: Template Home
     */
?>

<?php  get_header(); ?>

    <!-- Menu Section -->
    <?php $full_home = true;?>
    <?php include("inc/nav.php"); ?>


        <!-- Hero Section -->
        <?php $data_hero = get_field("h_hero");?>
        <?php $is_active_hero = $data_hero['active']; ?>
        <?php if($is_active_hero) { ?>
            <section id="holder_hero" >
                <div class="hero-image x-hidden bg-triangle"  style="
                    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  
                    url('<?php //echo $data_hero['poster_video']['sizes']['hero_v1']; ?>')">

                    <div class="content-full-video" style="<?php echo ($data_hero['opacity_video'])?'opacity:'.$data_hero['opacity_video']:'';?>" >
                        <video class="playerembedx" id="playerembedx" loop autoplay="true" muted="false" controls  poster="<?php echo $data_hero['poster_video']['sizes']['hero_v1']; ?>">
                            <source src="<?php echo $data_hero['video']['url']; ?>" type="video/mp4" style="width:100%">
                            <!-- <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/Unified_Rebrand_logo-animation_v2.ogg" type="video/ogg"> -->
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    
                    <div class="container">
                        <div class="hero-text">
                            
                            <div class="single-item-rtlx plx" data-aos="fade-up">
                                <div class="big_logo_hero"><img src="<?php echo $data_hero['logo_1']['url']; ?>" class="img-fluid"></div>    
                                <div class="element-info" >
                                    <h1><?php echo $data_hero['heading']; ?></h1>
                                    
                                    <!--
                                    <br>
                                    <div class="holder-link">
                                        <a href="#" class="btn-link dark  btn-open-register" data-id="demo-modal">ENTER NOW</a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="logo-bottom-hero">
                        
                        <div class="container text-left" data-aos="fade-right">
                            <img src="<?php echo $data_hero['logo_2']['url']; ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- Serenity -->
        <?php $data_address = get_field("h_address");?>

        <?php $is_active_a_first_content = $data_address['active_first_content']; ?>
        <?php if($is_active_a_first_content) { ?>
            <section class="h_serenety">
                <div class="container">
                    <div class="holder" data-aos="zoom-in-down">

                        <?php if( $data_address['fc_heading'] ) { ?>
                            <h1><?php echo $data_address['fc_heading']; ?></h1>
                        <?php } ?>    
                        
                        <?php if( $data_address['fc_description'] ) { ?>
                            <p><?php echo $data_address['fc_description']; ?></p>
                        <?php } ?>

                        <?php if( $data_address['fc_link'] ) { ?>
                            <div class="holder-link">
                                <?php echo printBtn($data_address['fc_link'], "btn-link dark  btn-open-register hvr-sweep-to-bottom"); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- Video -->
        <!-- <section class="h_video"></section> -->

        <!-- Location -->
        <?php $is_active_a_second_content = $data_address['active_second_content']; ?>
        <?php if($is_active_a_second_content) { ?>
            <section class="h_location">
                <div class="container">
                    <div class="main_layout">
                        <div class="grid-box">
                            <div class="left" data-aos="fade-right">
                                <div class="info" >
                                    <?php if( $data_address['sc_heading'] ) { ?>
                                        <h1><?php echo $data_address['sc_heading']; ?></h1>
                                    <?php } ?>
                                    <?php if( $data_address['sc_description'] ) { ?>
                                        <p><?php echo $data_address['sc_description']; ?></p>
                                    <?php } ?>

                                    <?php if( $data_address['sc_link'] ) { ?>
                                        <div class="holder-link">
                                            <?php echo printBtn($data_address['sc_link'], "btn-link dark  btn-open-register hvr-sweep-to-bottom"); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="right">
                                
                            </div>
                        </div>
                        <div class="holder_img" data-aos="fade-up">
                            <img src="<?php echo $data_address['sc_mapa']['sizes']['single_v1']; ?>" >
                        </div>
                        
                    </div>
                    <div class="clear-both"></div>
                </div>
            </section>
        <?php } ?>



        <?php //include('inc/home_part2.php'); ?>

        
        <!-- h_banner -->
        <?php $data_banner = get_field("h_banner");?>
        <?php $is_active_data_banner = $data_banner['active']; ?>
        <?php if($is_active_data_banner) { ?>
            <?php
                $styleBG = ""; 
                if($data_banner['background'])
                { 
                    $styleBG = "background-color:".$data_banner["background"]; 
                }    
            ?>
            <section class="h_reasons" style="<?php echo $styleBG;  ?>">
                <hr class="bar_divider">
                <div class="container">
                    <div class="info" data-aos="zoom-in-up">
                        <?php if($data_banner['heading']) {?>
                            <h1><?php echo $data_banner['heading']; ?></h1>
                        <?php } ?>

                        <?php if($data_banner['link']) {?>
                            <div class="holder-link">
                                <?php echo printBtn($data_banner['link'], "btn-link dark  btn-open-register hvr-sweep-to-bottom"); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php } ?>
       
        <!-- Yonge series -->
        <?php $data_yonge_series = get_field("h_yonge_series");?>
        <?php $is_active_data_yonge_series = $data_yonge_series['active']; ?>
        <?php if($is_active_data_yonge_series) { ?>
            <section class="h_yonge_series">
                <div class="container">
                    <div class="holder_float">
                        
                        <div class="content  left">
                            <div class="data">
                                <div class="img"><img src="<?php echo $data_yonge_series['logo']['url']; ?>" class="img-fluid"> </div>
                                <?php if($data_yonge_series['heading']) { ?>
                                    <h1><?php echo $data_yonge_series['heading']; ?></h1>
                                <?php } ?>

                                <?php if($data_yonge_series['description']) { ?>
                                    <p><?php echo $data_yonge_series['description']; ?></p>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="slick  right" data-aos="fade-down">
                                <div class="holder_custom_nav_slick">
                                    <span id="unparalleled_arrow_left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/Previous.png"></span>
                                    <span class="slides-numbers">
                                        <span class="pagingInfo_active">01</span> / <span class="pagingInfo_total"></span>
                                        <!-- <span class="pagingInfo"></span> -->
                                    </span>
                                    <span id="unparalleled_arrow_right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/Next.png"></span>
                                </div>
                                
                                <div class="slide_amenities">
                                    <?php
                                        if($data_yonge_series['item'])
                                        {
                                            foreach($data_yonge_series['item'] as $value )
                                            {
                                                ?>
                                                <div>
                                                    <img src="<?php echo $value['image']['sizes']['gallery_v1']; ?>" class="img-fluid">
                                                    <div class="description">
                                                        <?php if($value['title']) { ?>
                                                            <h3><?php echo $value['title'];  ?></h3>
                                                        <?php } ?>

                                                        <?php if($value['description']) { ?>
                                                            <p><?php echo $value['description'];  ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                    ?>
                                </div>
                            <div>

                        </div>
                        
                    </div>
                    <div class="clear-both"></div>
                </div>
            </section>
        <?php } ?>


        <!-- Series and comming soon -->
        <?php $data_partners = get_field("h_partners");?>
        <?php $list = $data_partners['item']; ?>
        <?php if($list) { ?>
            <section class="h_comming_soon">
                <div class="container">
                    <div class="grid-series" >

                        <?php 
                            foreach($list as $value )
                            {
                                if($value['active']) {
                                ?>
                                    <div class="child" data-aos="zoom-in">
                                        <div class="project_wrapper">
                                            <img class="poster img-fluid" src="<?php echo $value['image']['sizes']['gallery_v2']; ?>">
                                            <?php if($value['sold_out']){ ?>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/sold-out.png" class='sold-out'>
                                            <?php } ?>

                                            <div class="holder-link">
                                                <?php if($value['link']){ ?>
                                                
                                                        <!-- <a href="https://www.metroview.ca/projects" class="btn-link dark hvr-sweep-to-bottom">VISIT WEBSITE</a> -->
                                                        <?php echo printBtn($value['link'], "btn-link dark  hvr-sweep-to-bottom", "no-modal"); ?>
                                                    
                                                <?php } ?>
                                                <?php if($value['label']){ ?>
                                                    <div class="">
                                                        <!-- <a href="https://www.metroview.ca/projects" class="btn-link dark hvr-sweep-to-bottom">VISIT WEBSITE</a> -->
                                                        <?php echo $value['label']; ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <img class="project_logo img-fluid" src="<?php echo $value['logo']['url']; ?>">
                                    </div>
                                <?php
                                }
                            }
                        ?>

                    </div>
                </div>
            </section>
        <?php } ?>
        


<?php get_footer(); ?>
