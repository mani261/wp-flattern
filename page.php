<?php
get_header();
while ( have_posts() ) : the_post();
    ?>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2><?php the_title(); ?></h2>
                    <ol>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <?php
                        $parent_id = wp_get_post_parent_id(get_the_ID());
                        if ($parent_id) { ?>
                            <li><a href="<?php echo get_permalink($parent_id); ?>"><?php echo get_the_title($parent_id)?></a></li>
                            <?php
                        }
                        ?>
                        <li><?php the_title(); ?></li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Content Section ======= -->
        <section id="" class="">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </section><!-- End Content Section -->

    </main><!-- End #main -->

    <?php
    endwhile;
    get_footer(); ?>