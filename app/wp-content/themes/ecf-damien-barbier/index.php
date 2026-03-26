<?php
get_header();
?>




<h2>index</h2>

<section id="flex-index">

    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
    ?>
            <article class="montheme-article-index">
                    <?php


                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'custom-thumb']);
                    } else {
                        echo '<img class="custom-thumb" src="' . get_template_directory_uri() . '/images/noPhoto.webp" />';
                    }
                    ?>

                    <div class="card-date">
                        <?php echo get_the_date(); ?>
                    </div>
                

                <header>
                    <h1>
                        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    </h1>
                </header>
                <div>
                    <?php the_excerpt(); ?>
                </div>
            </article>
    <?php
        endwhile;
    else:
        echo 'Aucun contenu';
    endif;
    ?>

</section>









<?php
get_footer();
