<?php

get_header();

$title = get_field('page_title');
$descriptionTitle = get_field('page_description_title');
$description = get_field('page_description');
$image = get_field('page_image');
$link = get_field('page_link');

//Taget från inlämningsuppgift 2, med lite ändringar, då designen inte var viktig.

?>
  <section class="red-bg" id="hero">
    <div class="container">
      <div class="d-flex flex-row-reverse justify-content-center p-4">
        <div class="row d-flex flex-row-reverse">
          <div class="col-lg-6">
          </div>
          <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
            <?php 
              if($title): ?>
                <h1 class="display-1"><?php echo $title; ?></h1>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="generic" id="about">
    <div class="container">
      <?php
        if($descriptionTitle): ?>
          <h2 class="display-5 mb-2"><?php echo $descriptionTitle; ?></h2>
        <?php endif; ?>
      <div class="row mb-3">
        <div class="col-sm-12 col-md-6">
          <div class="d-flex h-50 flex-column justify-content-center mt-5">
            <?php
              if($link): ?>             
                <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
              <?php endif; ?>
            
              <?php
              if($description): ?>
                <p><?php echo $description; ?></p>
              <?php endif; ?>
          </div>
        </div>
    </div>
  </section>

<?php
get_footer();
?>