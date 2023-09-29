<div class="col-md-3 mt-4 mb-4">
    <div class="card h-100">
        <a href="<?php the_permalink() ?>">
            <img src="<?php if (get_field("book_cover_image")) {
                            echo get_field("book_cover_image")["sizes"]["thumbnail"];
                        } else {
                            echo get_theme_file_uri("/img/book_cover.png");
                        } ?>" class="card-img-top card-image" alt="book cover">
        </a>

        <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title"><?php the_title(); ?></h5>

            <?php if (get_field("author")) { ?>
                <p class="card-text">ავტორი: <?php echo get_field("author"); ?></p>
            <?php  } ?>

            <p class="card-text">

                <?php if (is_single()) {
                    echo "აღწერა " . the_content();
                } elseif (has_excerpt()) {
                    echo "მოკლე აღწერა: " . the_excerpt();
                } else {
                    echo "მოკლე აღწერა: " . wp_trim_words(get_the_content(), 10);
                } ?>
            </p>
        </div>
        <div class="card-footer text-center">
            <small class="text-muted font-weight-bold">გამოშვების თარიღი - <?php echo get_field("publish_year") ?></small>
        </div>
    </div>
</div>