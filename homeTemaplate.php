<?php /* Template Name: Home Page Template */ get_header(); ?>


<div class="bannerHome" style="background: url('<?php echo get_template_directory_uri(); ?>/images/3.png');">
    <div class="container">
        <div class="contentContainerBannerHOme">
            <h2>Make your Small Business a Big Player in a Competitive Environment.</h2>
            <p>Enterprise-Grade Systems, Processes, and Automation for a fraction of what the Fortune 500 companies pay for them. </p>
            <div class="buttonContainersHomeBanner">
                <a href="#" class="getInTOuch">About Us <img src="<?php echo get_template_directory_uri(); ?>/images/2.svg"></a>
                <a href="#" class="reversedButton">About Us <img src="<?php echo get_template_directory_uri(); ?>/images/2.svg"></a>
            </div>
        </div>
    </div>
</div>
<div class="section2HomePage">
    <div class="container">
        <div class="contentSecction2HOmepage">
            <h1>
                DISCOVER - TRANSFORM - IMPROVE - AFFORDABLY
            </h1>
            <h2>Calling All SME Entrepreneurs, Funded Startups, CEOs & Stakeholders.</h2>
            <p>Have you asked yourself the question, “Can anyone out there transform how we manage our business?” Are any of these your Business Frustrations?</p>
        </div>
        <div class="blocsContainer">
            <div class="row">
                <?php if( have_rows('block_container') ): while( have_rows('block_container') ) : the_row(); ?> 
                    <div class="col-md-6">
                        <div class="boxContainer">
                            <div class="imageContainerBox">
                                <img src="<?php the_sub_field('imagebb'); ?>">
                            </div>
                            <div class="fixedInBox">
                                <div class="innerFixed">
                                    <h4><?php the_sub_field('headingbb'); ?></h4>
                                    <ul>
                                        <?php if( have_rows('list_items') ): while( have_rows('list_items') ) : the_row(); ?> 
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/4.svg"><?php the_sub_field('list_bb'); ?></li>
                                        <?php endwhile; endif; ?>
                                    </ul>
                                    <a href="<?php the_sub_field('read_more_link'); ?>">Read More <img src="<?php echo get_template_directory_uri(); ?>/images/3.svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="whyUs">
    <div class="container">
        <h2>Why Us?</h2>
        <p>Janus Consulting Partners, LLC's pedigree pillars itself significantly in an Ernst and Young experience with successful strategic management projects across numerous Fortune 500 companies. We scope business processes to deliver improved performance fast. Just a few of multiple achievements include: </p>
    </div>
    <div class="noContainer">
        <div class="innerNoContainer">
            <div class="imageCOntainerLeft">
                <img src="<?php echo get_template_directory_uri(); ?>/images/5.svg">
            </div>
            <div class="listContainerNoContainerHomepage">
                <ul>
                    <li>
                        <div class="boxContainerNoCOntainer">
                            <h2>14+</h2>
                            <p>years of experience in Business Analysis with a proven track record of proactive analytical excellence in a fast-paced business environment</p>
                        </div>
                    </li>
                    <li>
                        <div class="boxContainerNoCOntainer">
                            <h2>07% </h2>
                            <p>quarter-over-quarter increase in lead generation</p>
                        </div>
                    </li>
                    <li>
                        <div class="boxContainerNoCOntainer">
                            <h2>$250M+ </h2>
                            <p>generated in additional project work for leading Big-4 consulting firm</p>
                        </div>
                    </li>
                    <li>
                        <div class="boxContainerNoCOntainer">
                            <h2>36%</h2>
                            <p>quarter-over-quarter increase in client retention</p>
                        </div>
                    </li>
                    <li>
                        <div class="boxContainerNoCOntainer">
                            <h2>23%</h2>
                            <p>year-over-year decrease in employee churn</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="sectoinLastHomepage">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contentCOntainersectionlastSection">
                    <h2>The timing for you to act with determination is NOW!</h2>
                    <p>Get the SME Strategic Management Team with Big Company Ammunition in your corner at affordable pricing. <strong>TRANSPARENT - MODERN - TECHNOLOGY-BASED METHODS</strong></p>
                    <a href="#" class="getInTOuch">Contact Us Today <img src="<?php echo get_template_directory_uri(); ?>/images/2.svg"></a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2.png">
                <div class="rotatedText">
                    <strong>Joseph Paglinawan</strong>
                    <span>C.E.O JANUS CONSULTING Partners</span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>