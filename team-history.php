<?php
/*
Template Name: История нашего успеха
*/
?>

<?php
    get_header();
?>


<div class="aboutus" id="aboutus">
    <div class="container">
        <h1 class="title">Наша історія успіху</h1>

            <?php
            $num_post = 2;

             // вывод нашей истории
             $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'our_history',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>
        <div class="row">
        <?php
                   
        if($num_post%2): ?>
            <div class="col-lg-6">
                <div class="subtitle">
                   <?php the_title(); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('text_history');?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="
                <?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri().'/assets/img/not-found.jpg';
                        }
                        ;?>">
            </div>
        <?php else: ?>

            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php echo bloginfo('template_url');?>/assets/img/about_2.jpg" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                        <?php the_title(); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('text_history');?>
                </div>
            </div>

                    <?php endif;
                    $num_post++;
                    ?>


           
        </div>


            
            <?php
            }
            wp_reset_postdata(); // сброс               
            ?>
            
            
            
          



      
    </div>
</div>


<?php
    get_footer();
?>