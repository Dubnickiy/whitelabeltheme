<?php
 /* Template Name: Home Page */
  ?>

   <?php
get_header();
?>

<main>
  <div class="welcom-main">
    <div class="welcome" style = "background: url(<?php $title_slider_img_1 = get_field("title_slider_img_1");echo $title_slider_img_1?>)">
      <div class="welcome-text">
          <h1 class="welcome-to"> <span class="welcto"><?php $title_slider_1 = get_field("title_slider_1"); echo $title_slider_1?></span> <?php $title_slider_2 = get_field("title_slider_2"); echo $title_slider_2?></h1>
          <p class="welcome-vacation"><?php $title_slider_3 = get_field("title_slider_3"); echo $title_slider_3?></p>
      </div>
    </div>

    <div class="welcome-one" style = "background: url(<?php $title_slider_img_2 = get_field("title_slider_img_2");echo $title_slider_img_2?>)">
      <div class="welcome-text">
          <h1 class="welcome-to"> <span class="welcto"><?php $title_slider_1 = get_field("title_slider_1"); echo $title_slider_1?></span> <?php $title_slider_2 = get_field("title_slider_2"); echo $title_slider_2?></h1>
          <p class="welcome-vacation"><?php $title_slider_3 = get_field("title_slider_3"); echo $title_slider_3?></p>
      </div>
    </div>

    <div class="welcome-two" style = "background: url(<?php $title_slider_img_3 = get_field("title_slider_img_3");echo $title_slider_img_3?>)">
      <div class="welcome-text">
          <h1 class="welcome-to"> <span class="welcto"><?php $title_slider_1 = get_field("title_slider_1"); echo $title_slider_1?></span> <?php $title_slider_2 = get_field("title_slider_2"); echo $title_slider_2?></h1>
          <p class="welcome-vacation"><?php $title_slider_3 = get_field("title_slider_3"); echo $title_slider_3?></p>
      </div>
    </div>
  </div>

  <div class="discover">
    <h1 class="discover-tahiti"><span class="discover-text"><?php $_card_title = get_field("_card_title"); echo $_card_title?></span> <?php $card_title_1 = get_field("card_title_1"); echo $card_title_1?></h1>

    <p class="discover-just"><?php $card_text = get_field("card_text"); echo $card_text?></p>

    <?php get_header(); ?>



    <div class="discover-card">
      <?php
 
// The Query
$args = array(
  'post_type' => 'card'
);
$the_query = new WP_Query( $args );

 
// The Loop
if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      ?>
        <div class="card">
              <?php the_post_thumbnail(); ?>
                <h4 class="card-title"><?php the_title(); ?></h4>
              <div class="card-text"><?php the_excerpt(); ?></div>
              <div class="card-footer">
                <h3><span>FROM</span> &dollar;2.500</h3>
                <p><a class="arrow" href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rounded Rectangle 1 copy.png" alt=""></a></p>
              </div>
            </div>
        <?php
    }  
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div>

  <p class="discover-input"><?php $discover_text = get_field("discover_text"); echo $discover_text?></p>
  <div class="select-button">
    <div class="select">
      <section>
        <select class="select-list" name="Select an island" id="">
          <option value="Select an island"><?php $input_text = get_field("input_text"); echo $input_text?></option>
          <option value="Europe"><?php $input_text_1 = get_field("input_text_1"); echo $input_text_1?></option>
          <option value="Greenland"><?php $input_text_2 = get_field("input_text_2"); echo $input_text_2?></option>
          <option value="Madagascar"><?php $input_text_3 = get_field("input_text_1"); echo $input_text_3?></option>
          <option value="New Guinea">New <?php $input_text_4 = get_field("input_text_4"); echo $input_text_4?></option>
        </select>
      </section>
    </div>
    <div class="select-list-button">
      <form action="action-page.php" method="get">
        <button class="list-button"><?php $di = get_field("di"); echo $di?></button>
      </form>

    </div>
  </div>
  </div>

  <div class="experience" style = "background: url(<?php $experience_img = get_field("experience_img");echo $experience_img?>)">
    <h1 class="experience-title"><span class="experience-tahiti"><?php $experience_title = get_field("experience_title"); echo $experience_title?></span> <?php $experience_title_1 = get_field("experience_title_1"); echo $experience_title_1?></h1>
    <p class="experience-title-text"><?php $experience_title_text = get_field("experience_title_text"); echo $experience_title_text?></p>
    <p class="experience-text"><?php $experience_text = get_field("experience_text"); echo $experience_text?></p>
    <form action="action-page.php" method="get">
      <button class="experience-button"><?php $experience_button = get_field("experience_button"); echo $experience_button?></button>
    </form>
  </div>

  <!-- <div class="why">
    <h1 class="why-title"><span class="why-tahiti"><?php $why_title = get_field("why_title"); echo $why_title?></span> <?php $why_title_1 = get_field("why_title_1"); echo $why_title_1?></h1>
    <div class="card-why">
      <div>
        <p class="card-why-text"><?php $why_text_1 = get_field("why_text_1"); echo $why_text_1?></p>
      </div>
      <div>
        <p class="card-why-text"><?php $why_text_2 = get_field("why_text_2"); echo $why_text_2?></p>
      </div>
      <div>
        <p class="card-why-text"><?php $why_text_3 = get_field("why_text_3"); echo $why_text_3?></p>
      </div>
    </div>
  </div> -->


<div class="container">
  <h1 class="why-title"><span class="why-tahiti"><?php $why_title = get_field("why_title"); echo $why_title?></span> <?php $why_title_1 = get_field("why_title_1"); echo $why_title_1?></h1>
  <div class="row">
    <div class="col">
      <p class="card-why-text"><?php $why_text_1 = get_field("why_text_1"); echo $why_text_1?></p>
    </div>
    <div class="col">
      <p class="card-why-text"><?php $why_text_2 = get_field("why_text_2"); echo $why_text_2?></p>
    </div>
    <div class="col">
      <p class="card-why-text"><?php $why_text_3 = get_field("why_text_3"); echo $why_text_3?></p>
    </div>
  </div>
</div>





  <div class="unique" style = "background: url(<?php $unique_img = get_field("unique_img");echo $unique_img?>)">
    <div class="unique-card"></div>
    <h1 class="unique-title"><?php $unique_title = get_field("unique_title"); echo $unique_title?></h1>
    <p class="unique-text"><?php $unique_text = get_field("unique_text"); echo $unique_text?></p>
    <form action="action-page.php" method="get">
      <button class="unique-button"><?php $unique_buttom = get_field("unique_buttom"); echo $unique_buttom?></button>
    </form>
  </div>
</main>
<?php
  
get_footer();
?>