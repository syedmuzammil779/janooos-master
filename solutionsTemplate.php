<?php /* Template Name: Solution Template */  get_header(); ?>

<div class="section2solutions">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="imgeContainersectionSoluton">
					<img src="<?php the_field('imageContainerSection2Solution'); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="contentSection2Solution">
					<h2><?php the_field('headingSeciotnSolution'); ?></h2>
					<ul>
						<?php if( have_rows('list_itemss') ): while( have_rows('list_itemss') ) : the_row(); ?>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/5.png">
								<?php the_sub_field('list_itemss'); ?>
							</li>
						<?php endwhile; endif; ?>
					</ul>
					<p>
						<?php the_field('contentSolution1'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section3Solutions">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contentSection3Solutions">
					<h2><?php the_field('headingss'); ?></h2>
					<p><?php the_field('contentss'); ?></p>
					<ul>
						<?php if( have_rows('listss') ): while( have_rows('listss') ) : the_row(); ?>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/5.png">
								<?php the_sub_field('list_itemsss'); ?>
							</li>
						<?php endwhile; endif; ?>
					</ul>

					<ol>
						<?php if( have_rows('inner_list') ): while( have_rows('inner_list') ) : the_row(); ?>
							<li>
								- <?php the_sub_field('inner_list_itemss'); ?>
							</li>
						<?php endwhile; endif; ?>
					</ol>
					<p class="darker">
						<?php the_field('strong_textsss'); ?>
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="imgeContainersectionSoluton">
					<img src="<?php the_field('imagess'); ?>">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section4">
	<?php if( have_rows('row_repeater') ): while( have_rows('row_repeater') ) : the_row(); ?>
		<div class="rowContainer">
			<div class="col-1s">
				<img src="<?php the_sub_field('imagesd'); ?>">
			</div>
			<div class="cols2">
				<div class="contentContainercolumsn">
					<h6><?php the_sub_field('mini_heading'); ?></h6>
					<h2><?php the_sub_field('headingsd'); ?></h2>
					<p><?php the_sub_field('contentsd'); ?></p>
					<strong><?php the_sub_field('strong_text'); ?></strong>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
	
</div>
<?php get_footer(); ?>