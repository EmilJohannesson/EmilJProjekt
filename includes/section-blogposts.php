<?php
get_header();

$title = get_field('blog_title');
$author = get_field('blog_author');
$description = get_field('blog_description');
$image = get_field('blog_image');

?>

<div>
    <?php 
    
    
    if (have_posts(  )) :while (have_posts(  )) : the_post(  );

    $title = get_field('blog_title');
    $author = get_field('blog_author');
    $description = get_field('blog_description');
    $email = get_field('blog_email');

    echo the_title();
    echo "<br>";
    echo "$author <br>";
    echo "$email <br>";
    echo "$description <br>";
    echo the_excerpt();
    endwhile; else: ?>
    <p>Det finns inga blogginlägg</p>
    <?php endif; ?>
</div>

<?php
get_footer();
?>