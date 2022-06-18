<footer>
  <div class="footer-logo">
    <?php the_custom_logo();?>
    <h1 class="footer-logo-text">TAHITI</h1>
  </div>
  <div class="islands">
    <h1 class="islands-text"><?php $islands_text = get_field("islands_text"); echo $islands_text?></h1>
    <nav>
      <ul class="islands-nav">
        <li><a href="#"><?php $islands_text_1 = get_field("islands_text_1"); echo $islands_text_1?></a></li>
        <li><a href="#"><?php $islands_text_2 = get_field("islands_text_2"); echo $islands_text_2?></a></li>
        <li><a href="#"><?php $islands_text_3 = get_field("islands_text_3"); echo $islands_text_3?></a></li>
        <li><a href="#"><?php $islands_text_4 = get_field("islands_text_4"); echo $islands_text_4?></a></li>
        <li><a href="#"><?php $islands_text_5 = get_field("islands_text_5"); echo $islands_text_5?></a></li>
        <li><a href="#"><?php $islands_text_6 = get_field("islands_text_6"); echo $islands_text_6?></a></li>
        <li><a href="#"><?php $islands_text_7 = get_field("islands_text_7"); echo $islands_text_7?></a></li>
        <li><a href="#"><?php $islands_text_8 = get_field("islands_text_8"); echo $islands_text_8?></a></li>
        <li><a href="#"><?php $islands_text_9 = get_field("islands_text_9"); echo $islands_text_9?></a></li>
        <li><a href="#"><?php $islands_text_10 = get_field("islands_text_10"); echo $islands_text_10?></a></li>
        <li><a href="#"><?php $islands_text_11 = get_field("islands_text_11"); echo $islands_text_11?></a></li>
        <li><a href="#"><?php $islands_text_12 = get_field("islands_text_12"); echo $islands_text_12?></a></li>
        <li><a href="#"><?php $islands_text_13 = get_field("islands_text_13"); echo $islands_text_13?></a></li>
      </ul>
    </nav>
  </div>
  <div class="packages">
    <h1 class="packages-text"><?php $packages = get_field("packages"); echo $packages?></h1>
    <nav>
      <ul class="packages-nav">
        <li><a href="#"><?php $packages_text = get_field("packages_text"); echo $packages_text?></a></li>
        <li><a href="#"><?php $packages_text_1 = get_field("packages_text_1"); echo $packages_text_1?></a></li>
        <li><a href="#"><?php $packages_text_2 = get_field("packages_text_2"); echo $packages_text_2?></a></li>
        <li><a href="#"><?php $packages_text_3 = get_field("packages_text_3"); echo $packages_text_3?></a></li>
        <li><a href="#"><?php $packages_text_4 = get_field("packages_text_4"); echo $packages_text_4?></a></li>
        <li><a href="#"><?php $packages_text_5 = get_field("packages_text_5"); echo $packages_text_5?></a></li>
        <li><a href="#"><?php $packages_text_6 = get_field("packages_text_6"); echo $packages_text_6?></a></li>
        <li><a href="#"><?php $packages_text_7 = get_field("packages_text_7"); echo $packages_text_7?></a></li>
        <li><a href="#"><?php $packages_text_8 = get_field("packages_text_8"); echo $packages_text_8?></a></li>
      </ul>
    </nav>
  </div>
  <div class="tahiti">
    <h1 class="tahiti-text"><?php $tahiti = get_field("tahiti"); echo $tahiti?></h1>
    <nav>
      <ul class="tahiti-nav">
        <li><a href="#"><?php $tahiti_text_1 = get_field("tahiti_text_1"); echo $tahiti_text_1?></a></li>
        <li><a href="#"><?php $tahiti_text_2 = get_field("tahiti_text_2"); echo $tahiti_text_2?></a></li>
        <li><a href="#"><?php $tahiti_text_3 = get_field("tahiti_text_3"); echo $tahiti_text_3?></a></li>
        <li><a href="#"><?php $tahiti_text_4 = get_field("tahiti_text_4"); echo $tahiti_text_4?></a></li>
        <li><a href="#"><?php $tahiti_text_5 = get_field("tahiti_text_5"); echo $tahiti_text_5?></a></li>
        <li><a href="#"><?php $tahiti_text_6 = get_field("tahiti_text_6"); echo $tahiti_text_6?></a></li>
      </ul>
    </nav>
  </div>
  <div class="network">
    <div class="facebook">
      <a href="#"><?php if( get_field('facebook') ): ?> <img src="<?php the_field('facebook'); ?>" /> <?php endif; ?></a>
    </div>
    <div class="social">
      <a href="#"><?php if( get_field('social') ): ?> <img src="<?php the_field('social'); ?>" /> <?php endif; ?></a>
    </div>
    <div class="twiter">
      <a href="#"><?php if( get_field('twitter') ): ?> <img src="<?php the_field('twitter'); ?>" /> <?php endif; ?></a>
    </div>
    <div class="instogram">
      <a href="#"><?php if( get_field('instagram') ): ?> <img src="<?php the_field('instagram'); ?>" /> <?php endif; ?></a>
    </div>
    <div class="youtube">
      <a href="#"><?php if( get_field('youtube') ): ?> <img src="<?php the_field('youtube'); ?>" /> <?php endif; ?></a>
    </div>
  </div>
</footer>
<?php
  wp_footer();
?>
</body>

</html>