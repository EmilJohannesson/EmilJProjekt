<?php
get_header();
?>

<div>
    <?php if (have_posts(  )) :while (have_posts(  )) : the_post(  );
    echo the_title();
    echo the_excerpt();
    endwhile; else: ?>
    <p>There's nothing to show</p>
    <?php endif; ?>
</div>

<?php
get_footer();
?>