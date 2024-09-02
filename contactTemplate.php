<?php /* Template Name: Contact Page Template */ get_header(); ?>
<div class="contactPage">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contentLeftContact">
					<img src="<?php echo get_template_directory_uri(); ?>/images/21.png">
					<h2>Contact Information</h2>
					<ul class="contactInfoList">
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/22.png"><a href="tel:(858) 900-3231">(858) 900-3231</a></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/24.png"><a href="mailto: info@janusconsultingpartners.com"> info@janusconsultingpartners.com</a></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/25.png"><a href="#">Janus Consulting, 188851 NE 29th AVe, Suit 700 PMB 127 Aventura, FI 33180</a></li>
					</ul>
					<h4>Also Available at:</h4>
					<ul class="socialLInks">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="rightSidecontactPage">
					<h2>Get In Touch With Us</h2>
					<div class="formContainer">
						<div class="inputContainerForm">
							<label>Full Name</label>
							<input type="text" name="" placeholder="e.g. John Smith">
						</div>
						<div class="inputContainerForm">
							<label>Email Address</label>
							<input type="email" name="" placeholder="e.g. abc@example.com">
						</div>
						<div class="inputContainerForm">
							<label>Phone Numbers</label>
							<input type="number" name="" placeholder="111 111 1111">
						</div>
						<div class="inputContainerForm">
							<label>Company Name</label>
							<input type="text" name="" placeholder="e.g. Tech Consulting">
						</div>
						<div class="inputContainerForm">
							<label>Your Message</label>
							<textarea placeholder="Write your message here!"></textarea>
						</div>
					</div>
					<button type="submit">Send Message</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>