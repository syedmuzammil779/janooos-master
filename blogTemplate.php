<?php /* Template Name: Blog Page Template */ get_header(); ?>
<div class="blogPageContainer">
	<div class="container">
		<div class="headingContainer">
			<h2>STAY INFORMED   I   MOVE WITH THE TIMES   I   CREATE AGILITY</h2>
		</div>
		<div class="latestArticles">
			<h2>Latest Articles</h2>
			<div class="row">
				<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' => -1)); while ( $data_query->have_posts() ) : $data_query->the_post();?>
				<div class="col-md-4">
					<div class="boxContinerBlog">
						<a href="<?php the_permalink(); ?>">
							<div class="imageWrapperBlog">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="contentContainerBlogPostPageh">
								<h4><?php the_title(); ?></h4>
								<p><?php the_excerpt(); ?></p>
							</div>
						</a>
					</div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>