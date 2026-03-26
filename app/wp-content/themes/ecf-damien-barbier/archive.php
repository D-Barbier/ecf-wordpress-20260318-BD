<?php
get_header();
?>


<h2>archive</h2>

<section class="flex">

    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
    ?>
            <article class="montheme-article">

                <div class="card">
                    <?php

                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'custom-thumb']);
                    } else {
                        echo '<img class="custom-thumb" src="' . get_template_directory_uri() . '/images/noPhoto.webp" />';
                    }
                    ?>
                </div>

                <header>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </header>
                <div>
                    <?php the_content(); ?>
                </div>
                <div>
                    <p>écrit par <?php the_author_link() ?> le <?php the_date() ?>dans <?php the_category(', ') ?></p>
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
