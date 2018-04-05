<?php
get_header();


the_post();


$args = array(
    'post_type'      => 'page',
    'pagename' => 'kono-subarashii-sekai-ni-shukufuku-wo'
);

$kono = new WP_Query( $args );

if($kono->have_posts()) :
    $kono->the_post();
?>



<!-- Banner -->
<section id="banner" class="major">
    <div class="inner">
        <header class="major">
            <h1><?php the_title() ?></h1>
        </header>
        <div class="content">
            <p><?php the_excerpt() ?></p>
            <ul class="actions">
                <li><a href="<?php the_permalink() ?>" class="button next scrolly">Get Started</a></li>
            </ul>
        </div>
    </div>
</section>
<?php
    endif;
    wp_reset_postdata();
?>

<!-- Main -->
<div id="main">

    <!-- One -->
    <section id="one" class="tiles">
        <?php

        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
            'order'          => 'DESC',
        );

        $q = new wp_query( $args );

        while ( $q->have_posts() ) : $q->the_post(); ?>
            <article>
                <span class="image">
                    <?php the_post_thumbnail() ?>
                </span>
                <header class="major">
                    <h3><a href="<?php the_permalink() ?>" class="link"><?php the_title() ?></a></h3>
                    <p><?php the_excerpt() ?></p>
                </header>
            </article>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>

    </section>

    <?php

    $args = array(
        'post_type'      => 'page',
        'pagename' => 'qui-sommes-nous'
    );

    $qui = new WP_Query( $args );

    if($qui->have_posts()) :
    $qui->the_post();
    ?>
    <!-- Two -->
    <section id="two">
        <div class="inner">
            <header class="major">
                <h2><?php the_title() ?></h2>
            </header>
            <div><?php the_content() ?></div>
        </div>
    </section>
    <?php
        endif;
        wp_reset_postdata()
    ?>

</div>





<?php get_footer();
?>