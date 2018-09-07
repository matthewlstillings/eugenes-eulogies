<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eugene\'s_Eulogies
 */

get_header();
?>
	<div class="preview-thumbnail review-preview-thumbnail about-hero"  data-type="background" data-speed="5">
                <div class="preview-thumbnail__content container">
                    <h1 class="preview-thumbnail__title" style="color: #E9C87B;">About</h1>
                </div>    
    </div> <!-- Header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main"> <!-- Test whether this is category template -->
		
		<section id="post-<?php the_ID(); ?>" class="article-content-container review" >
			<div class="article__container container">
				<div class="push"> 
					<div class="review__title-and-score__container">
						<div class="review__title-and-year__container">
						<?php the_title( '<h2 class="review__title" id="review-title">', '</h2>' );?>
						<?php if (!empty($post_subtitle)): ?> 
							<h4 class="post__subtitle"><?php echo $post_subtitle; ?></h4>
							<p class="post__date">Posted on: <?php echo get_the_date( 'Y-m-d' ); ?></p>
						<?php endif; ?> <!-- if its a list or blog post -->	
						</div>
						<img class="review__poster" src="<?php echo $post_poster['url']; ?>" />
						<?php if (!empty($film_director)): ?> 
							<h5 class="film-director-date-single"><?php echo $film_director ?> || <?php echo $film_date ?> </h5>
						<?php endif; ?> <!-- if there is a date/director -->
						
					</div>
				</div> <!-- left side container -->
				<article class="review__content article__content">
					<?php the_title( '<h2 class="review__title review__title-mobile" id="review-title">', '</h2>' );?>
					<?php if (!empty($post_subtitle)): ?> 
							<h4 class="post__subtitle post__subtitle--mobile"><?php echo $post_subtitle; ?></h4>
							<p class="post__date post__date--mobile">Posted on: <?php echo get_the_date( 'Y-m-d' ); ?></p>
					<?php endif; ?> <!-- if its a list or blog post -->	
					<?php if (!empty($review_score)): ?> 
						<h4 class="score score-mobile"><?php echo $review_score; ?>/100</h4>
					<?php endif; ?> <!-- if its a review/blog with a film score -->
					<?php // check if the repeater field has rows of data
						if( have_rows('list_item') ): 
							$i= 0;
						?>
							
							<!-- loop through the rows of data -->
						<?php while ( have_rows('list_item') ) : the_row(); 
							$year = get_sub_field('item_year');
							$director = get_sub_field('item_director');
							$i++;
						?>
						
						
							<div class="list-item">
								<div class="list-item__link-image-container">
									<a class="list-item__link" href="<?php the_sub_field('item_link'); ?>" class="list-item__link-wrapper"><img class="list-item__image" src="<?php the_sub_field('list_image'); ?>"/></a>
								</div>
								<div class="list-item__description-container">
									<h1 class="list-item__number"><?php echo $i;?></h1>
									<div class="list-item__title-container">
										<a href="<?php the_sub_field('item_link'); ?>" class="list-item__link-wrapper"><h4 class="list-item__title"><?php the_sub_field('item_title'); ?></h4></a>
										<p class="list-item__director-and-year"><em><?php echo $director; ?></em> || <em><?php echo $year; ?></em></p>
									</div>
									<p class="list-item__description"><?php the_sub_field('item_text'); ?></p>
								</div> <!-- item title and description wrapper -->
							</div> <!-- list item -->
							
						<?php
						
						endwhile;
						else : ?>

							<?php the_content(); ?> <!-- blog or review text -->

					<?php endif; ?>
					
					
				</article>
			</div>
		</section><!-- #post-<?php the_ID(); ?> -->

		</main><!-- #main -->
		
	</div><!-- #primary -->
	<?php get_template_part( 'template-parts/content', 'footer' );  ?>
<?php
get_template_part( 'template-parts/content', 'footer' ); 
get_footer();
