<?php 
	$the_query = new WP_Query( array(
		'posts_per_page' => - 1,
		'post_type'      => 'volunteer',
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
		'tax_query'      => array(
			array(
				'taxonomy' => 'grouping',
				'field'    => 'slug',
				'terms'    => 'youth',
			)
		),
	) );

if ( $the_query->have_posts() ): ?>
	<section class="flexible flexible--positions">
		<div class="main-container">
			<div class="main-grid">
				<div class="flexible--positions--container">
				<h2>Youth Opportunities</h2>
					<ul class="flexible--positions--accordion" data-accordion data-allow-all-closed="true">
						<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
							<li class="flexible--positions--single" data-accordion-item>
								<a class="flexible--positions--single-title" href="#"><?php the_title() ?></a>
								<div class="flexible--positions--single-content" data-tab-content>
									<h3><?= __( 'Responsibilities:', 'foundationpress' ); ?></h3>
									<?= get_field( 'responsibilities' ); ?>
									
									<h3><?= __( 'Desired Skills:', 'foundationpress' ); ?></h3>
									<?= get_field( 'skills' ); ?>
									<a class="apply-link"
										href="<?= get_field( 'apply-link' ); ?>">
										<?= __( 'Apply Now', 'foundationpress' ); ?>
									</a>
								</div>
							</li>
						<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<?php endif;
	wp_reset_postdata();
?>