<?php /* Template Name: About Page template */ get_header(); ?>
<div class="section2AboutPage">
	<div class="container">
		<div class="headingContaienerBlodl">
			<h2>UNIQUE TEAM LEADERSHIP  I COMPELLING TRANSFORMATION</h2>
		</div>
	</div>
	<div class="container">
		<div class="rowsContainerAbout">
			<div class="row">
				<div class="column1">
					<img src="<?php echo get_template_directory_uri(); ?>/images/10.png">
				</div>
				<div class="column2">
					<h3>Our Mission</h3>
					<p>To use our Big Enterprise experience to leverage cutting-edge technologies and methodologies to deliver successful solutions for small- and medium-sized businesses, (and funded startups) leading to groundbreaking success.  </p>
				</div>
			</div>
			<div class="row">
				<div class="column1">
					<img src="<?php echo get_template_directory_uri(); ?>/images/10.png">
				</div>
				<div class="column2">
					<h3>Our Mission</h3>
					<p>To use our Big Enterprise experience to leverage cutting-edge technologies and methodologies to deliver successful solutions for small- and medium-sized businesses, (and funded startups) leading to groundbreaking success.  </p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boutJoseph">
	<div class="flexed">
		<div class="col1">
			<div class="imageCOntainercol1">
				<img src="<?php echo get_template_directory_uri(); ?>/images/13.png">
				<span class="jpspehName" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/26.png');">Joseph Paglinawan</span>
			</div>
		</div>
		<div class="col2">
			<div class="contentContainerJosepgh">
				<h2>About Joseph</h2>
				<div class="containerinnerBoxsed">
					<h6><img src="<?php echo get_template_directory_uri(); ?>/images/14.png">Education</h6>
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/5.png"><span>Master of Strategic Management:</span> Indiana University - Bloomington</li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/5.png"><span>Master of Strategic Management:</span> Indiana University - Bloomington</li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/5.png"><span>Master of Strategic Management:</span> Indiana University - Bloomington</li>
					</ul>
				</div>
				<div class="containerinnerBoxsed">
					<h6><img src="<?php echo get_template_directory_uri(); ?>/images/15.png">Certifications</h6>
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/5.png">Postgraduate Certificate in Project Management: UMass Amherst (In Progress)</li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/5.png">Postgraduate Certificate in Project Management: UMass Amherst (In Progress)</li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/5.png">Postgraduate Certificate in Project Management: UMass Amherst (In Progress)</li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/5.png">Postgraduate Certificate in Project Management: UMass Amherst (In Progress)</li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/5.png">Postgraduate Certificate in Project Management: UMass Amherst (In Progress)</li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/5.png">Postgraduate Certificate in Project Management: UMass Amherst (In Progress)</li>
					</ul>
				</div>
				<div class="containerinnerBoxsed">
					<h6><img src="<?php echo get_template_directory_uri(); ?>/images/16.png">Experience</h6>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/images/5.png">
							Eight years of management consultation across a broad activity spectrum. Special focus on:
						</li>
						<li>
							Special focus on:
							<ul>
								<li>- Business Process Improvement (BPI) <span>using industry best practices</span> </li>   
								<li>- Business Process Improvement (BPI) <span>using industry best practices</span> </li>   
								<li>- Business Process Improvement (BPI) <span>using industry best practices</span> </li>   
								<li>- Business Process Improvement (BPI) <span>using industry best practices</span> </li>   
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contentjosepghContaienr">
	<div class="container">
		<p>We deliver ROI-centric solutions that resonate with CEOs and stakeholders in small- and medium-sized businesses everywhere in the US. Recently, we’ve provided unique perspectives and services to funded startups focused on scalability.  Our mantra never deviates from best industry practices to derive innovative processes affordably, leaving no stone unturned. One thing that stays constant in a dynamic arena is the personal and partnership touch that underlies our consulting approach.</p>
		<p>We make it our business to meet all your challenges head-on. To do so, we frequently diagnose process opportunities, implement process mapping to improve workflow, and devise other penetrating actions that promote improved performance fast. You can rely on us for results that you can see in your bottom line. We’re nothing if not flexible and adaptable to your organization’s changes, and with upheavals heralding in 2020, that’s what you need right now. You’ll quickly see upliftment in crucial  KPIs, which we will integrate into your system if not there now. Our strategic thinking revolves around tracking, monitoring, and measuring the project performances that drive your business to success.</p>
		<p>What I did for my Fortune 500 clients, I can do for you - at a fraction of the cost. My proprietary consultation formula guarantees it in three easy steps. Industry type is not an obstacle because our proven techniques transcend industry borders. I will competently transition you from a manual, paper-based system to a digital Business Process Management System (BPMS) if needed. Thinking about joining our family? Contact me for a free consultation with no obligation - there’s nothing to lose.</p>
		<h2>Joseph Paglinawan</h2>
	</div>
</div>	
<section class="client-brand padding-main">
    <div class="container">
        <div class="client-s">
            <div class="owl-carousel client-slider owl-theme">
                <?php if( have_rows('client_repeater','options') ):  while ( have_rows('client_repeater','options') ) : the_row(); ?>
                    <div class="item">
                        <div class="inner-client">
                            <img src="http://localhost/janus/wp-content/uploads/2021/03/Icon-awesome-quote-left.png">
                            <h2><?php the_sub_field('client_heading','options'); ?></h2>
                            <p><?php the_sub_field('client_subheading','options'); ?></p>
                            <span><?php the_sub_field('client_name','options'); ?></span>
                            <span class="smaa"><?php the_sub_field('client_desgnation','options'); ?></span>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>