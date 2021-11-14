<?php

get_header();

$name = get_field('contact_name');
$phone = get_field('contact_phone');
$email = get_field('contact_email');
$description = get_field('contact_description');

?>
<!--Inte vackert, men som det kanske märks så är jag inte intresserad av design eller snyggt utseénde-->
<h1> <?php echo $name ?></h1>
<h2> <?php echo $phone ?></h2>
<h2> <?php echo $email ?></h2>
<h2> <?php echo $description ?></h2>

<?php
get_footer();
?>