<?php get_header(); ?>

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-md-8">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <p class="font-weight-bold">ავტორი: <?php echo get_field("author"); ?></p>
                        <img src="<?php echo get_field("book_cover_image")["sizes"]["for_single_page"] ?>" class="img-fluid" alt="book cover">
                    </header>

                    <div class="entry-content mt-4">
                        <?php the_content(); ?>
                    </div>

                </article>
            <?php endwhile; ?>
        </div>

        <div class="col-md-4 d-flex align-items-center">
            <?php dynamic_sidebar('custom-sidebar'); ?>
        </div>
        
        <span>
            <p class=" font-weight-bold">იხილეთ ჩვენი წიგნების: <a href="<?php echo get_post_type_archive_link('book'); ?>">სია</a></p>
        </span>
    </div>
</div>

<?php get_footer(); ?>