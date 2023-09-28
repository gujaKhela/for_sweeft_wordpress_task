<?php get_header();
while (have_posts()) {
    the_post(); ?>

    <div class="container w-75">
        <h2 class="mb-3 mt-4"><?php the_title() ?></h2>
    </div>

    <div class="container w-75">
        <div class="row">
            <div class="col-md-8">
                <p><?php the_content() ?></p>
            </div>

            <div class="col-md-4">
                <?php dynamic_sidebar('custom-sidebar'); ?>

                <address>
                    <strong>Address:</strong><br>
                    123 Main St, City, Country<br>
                    <br>
                    <strong>Phone:</strong><br>
                    +(995) 123-4567<br>
                    <br>
                    <strong>Email:</strong><br>
                    <a href="mailto:example@example.com">example@example.com</a>
                </address>
            </div>
        </div>
    </div>

<?php }
get_footer(); ?>
