<?php
get_header();
?>


<h2>archive</h2>

<section id="flex-archive">

    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
    ?>
            <article class="montheme-article-archive">
                    <?php

                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'custom-thumb']);
                    } else {
                        echo '<img class="custom-thumb" src="' . get_template_directory_uri() . '/images/noPhoto.webp" />';
                    }
                    ?>
                <header>
                    <h1>
                        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    </h1>
                </header>
                <div>
                    <?php the_excerpt(); ?>
                </div>
                  <div>
                    <?php echo get_the_date() ?>
                    <a href="<?php the_permalink() ?>"><?php the_category(); ?></a>
                </div>
            </article>




    <?php
        endwhile;
    else:
        echo 'Aucun contenu';
    endif;
    ?>

</section>

<div class="pagination">
    <div>
        <?php the_posts_pagination(); ?>
    </div>
</div>








<?php
get_footer();
