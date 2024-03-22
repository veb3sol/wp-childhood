<?php
/*
Template Name: Игрушки
*/
?>

<?php
    get_header();
?>

<div class="toys" id="toys">
    <div class="container">
        <h2 class="subtitle">М'які іграшки</h2>
        <div class="toys__wrapper">

        <?php
            // вивод іграшок
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'soft_toys',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
            <div class="toys__item" style="background-image: url(<?php 
            if(has_post_thumbnail()){
                the_post_thumbnail_url();
            } else {
                echo get_template_directory_uri().'/assets/img/not-found.jpg';
            }
            ?>)">
                <div class="toys__item-info">
                    <div class="toys__item-title"><?php the_title(); ?></div>
                    <div class="toys__item-descr">
                        <?php the_field('toy_descr'); ?>
                    </div>
                    <div class="minibutton toys__trigger">Детальніше</div>
                </div>
            </div>
                       

            <?php
            }
            wp_reset_postdata(); // сброс               
            ?>

        </div>


        <h2 class="subtitle">Розвиваючі іграшки</h2>
        <div class="toys__wrapper">
        <?php
            // вывод слайдера
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'edu_toys',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
                        <div class="toys__item" style="background-image: url(<?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri().'/assets/img/not-found.jpg';
                        }
                        ;?>)">
                <div class="toys__item-info">
                    <div class="toys__item-title"><?php the_title();?></div>
                    <div class="toys__item-descr">
                        <?php the_field('toy_descr');?>
                    </div>
                    <div class="minibutton toys__trigger">Детальніше</div>
                </div>
            </div>
               
            <?php
            }
            wp_reset_postdata(); // сброс               
            ?>

        </div>
       
    </div>
</div>


<?php
    get_footer();
?>