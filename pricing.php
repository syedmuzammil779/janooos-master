<?php /* Template Name: Pricing Page Template */ get_header(); ?>
<section class="main-pricing padding-main">
<div class="container">
<div class="price-heading">
<h2>We can't give you a fixed fee for Step-3 today because...</h2>
<p>First, our team must nail things down by going through Steps One and Two.</p>
</div>
<div class="pricing-flex">
<div class="pricing-width">
<img src="http://localhost/janus/wp-content/uploads/2021/03/1MKJA7ytsQ.png">
<span>Step-1</span>
<p>Up to 2-Hours Free, Zero Obligation Consultation</p>
<h4>$0</h4>
</div>
<div class="pricing-width">
<img src="http://localhost/janus/wp-content/uploads/2021/03/1MKJA7ytsQ.png">
<span>Step-1</span>
<p>Up to 2-Hours Free, Zero Obligation Consultation</p>
<h4>$0</h4>
</div>
<div class="pricing-width">
<img src="http://localhost/janus/wp-content/uploads/2021/03/1MKJA7ytsQ.png">
<span>Step-1</span>
<p>Up to 2-Hours Free, Zero Obligation Consultation</p>
<h4>$0</h4>
</div>
</div>
</div>
</section>
<section class="our-fee">
<div class="container">
<h2>Our free consultation is frequently an “open sesame” session.</h2>
<p>It will surprise you on many fronts. Know what’s missing in your business and appreciate why our delivered ROI-centric results exceed our fee many times over. Rest assured, although our experience is with 500 Fortune companies, our pricing is geared to the needs of the SME sector entirely. Find out for yourself why we’ve made a groundbreaking difference to so many. What’s there to lose? We guarantee the up-to-two hours will be your best-spent time this year.</p>
</div>
</section>
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