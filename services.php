<?php /* Template Name: Services Page Template */ get_header(); ?>
<section class="servic-brand padding-main">
<div class="container">
<h2>A Broad & Deep Resource Pool</h2>
<div class="brand-flex">
<?php if( have_rows('service_repeater') ):  while ( have_rows('service_repeater') ) : the_row(); ?>
<div class="brand-width">
<p><?php the_sub_field('service_paragraph'); ?></p>
    <a href="<?php the_sub_field('read_more'); ?>">Read More<i class="fa fa-play"></i></a>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</section>
<!-- <section class="servic-chwl-section">
<div class="container">
<div class = "gallery">
  <div class="clipped-border">
    <img src="http://localhost/janus/wp-content/uploads/2021/03/1-1.png" id="clipped">
  </div>
  <div class="clipped-border">
    <img src="http://localhost/janus/wp-content/uploads/2021/03/1-1.png" id="clipped">
  </div>
  <div class="clipped-border">
    <img src="http://localhost/janus/wp-content/uploads/2021/03/1-1.png" id="clipped">
  </div>
    <div class="clipped-border">
    <img src="http://localhost/janus/wp-content/uploads/2021/03/1-1.png" id="clipped">
  </div>
    <div class="clipped-border">
    <img src="http://localhost/janus/wp-content/uploads/2021/03/1-1.png" id="clipped">
  </div>

</div>


</div>
</section> -->
<section class="client-brand padding-main">
<div class="container">
<div class="client-s">
<div class="owl-carousel client-slider owl-theme">
<?php if( have_rows('client_repeater','option') ):  while ( have_rows('client_repeater','option') ) : the_row(); ?>
    <div class="item">
        <div class="inner-client">
            <img src="http://localhost/janus/wp-content/uploads/2021/03/Icon-awesome-quote-left.png">
            <h2><?php the_sub_field('client_heading','option'); ?></h2>
            <p><?php the_sub_field('client_subheading','option'); ?></p>
            <span><?php the_sub_field('client_name','option'); ?></span>
            <span class="smaa"><?php the_sub_field('client_desgnation','option'); ?></span>
        </div>
    </div>
    <?php endwhile; endif; ?>
</div>
</div>
</div>
</section>



<?php get_footer(); ?>