<?php
get_header();

the_post();


?>



    <div id="main" class="alt">

        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1><?php the_title() ?></h1>
                </header>
                <span class="image main"><?php the_post_thumbnail() ?></span>
                <div class="content">
                    <?php the_content() ?>
                </div>
            </div>
        </section>

    </div>




<?php get_footer();
