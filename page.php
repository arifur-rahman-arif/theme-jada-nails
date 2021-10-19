<?php get_header()?>

<section class="p-5 mt-4 mr-5 ml-5 mb-4">
    <div class="site-main">

        <?php

// Start the Loop.
while (have_posts()):
    the_post();

    the_content();

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }

endwhile; // End the loop.
?>

    </div><!-- #main -->
</section><!-- #primary -->


<?php get_footer()?>