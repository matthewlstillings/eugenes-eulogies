<?php
/*
    Template Name: Home Page
 */

//Custom Fields


//Featured Review

$review__image = get_field('featured_review_image');
$review__title = get_field('featured_review_title');
$review__synopsis = get_field('featured_review_synopsis');
$review__link = get_field('featured_review_link');

//Featured Blog
$blog__image = get_field('featured_blog_image');
$blog__title = get_field('featured_blog_title');
$blog__synopsis = get_field('featured_blog_synopsis');
$blog__link = get_field('featured_blog_link');

//Featured List
$list__image = get_field('featured_list_image');
$list__title = get_field('featured_list_title');
$list__synopsis = get_field('featured_list_synopsis');
$list__link = get_field('featured_list_link');


get_header();
?>

      <section class="featured-posts">
                    <div class="featured-posts__carousel">
                        <div class="featured-post__slide" style="background-image: url('<?php echo $review__image['url']; ?>');">
                            <div class="featured-post__content container">
                                <a class="featured-post__link" href="<?php echo $review__link; ?>" ><h1 class="featured-post__title" style="color: #E9C87B;"><?php echo $review__title; ?></h1></a>
                                <p class="featured-post__synopsis"><?php echo $review__synopsis; ?></p>
                            </div>    
                        </div>

                        <div class="featured-post__slide" style="background-image: url('<?php echo $blog__image['url']; ?>');">
                            <div class="featured-post__content container">
                                <a class="featured-post__link" href="<?php echo $blog__link; ?>" ><h1 class="featured-post__title" style="color: #86CB92;"><?php echo $blog__title; ?></h1></a>
                                <p class="featured-post__synopsis"><?php echo $blog__synopsis; ?></p>
                            </div>    
                        </div>

                        <div class="featured-post__slide" style="background-image: url('<?php echo $list__image['url']; ?>');">
                            <div class="featured-post__content container">
                                <a class="featured-post__link" href="<?php echo $list__link; ?>"><h1 class="featured-post__title" style="color: #DE5B51;"><?php echo $list__title; ?></h1></a>
                                <p class="featured-post__synopsis"><?php echo $list__synopsis; ?></p>
                            </div>    
                        </div>
                    </div>  
        </section>

<?php
get_footer(); ?>
