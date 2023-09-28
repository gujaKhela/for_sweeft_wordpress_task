<?php get_header();

$customQuery = new WP_Query(array(
    "post_type" => "book",
    "posts_per_page" => 4,
));
?>

<div class="container w-75">
    <h2 class="mt-4">Featured Books</h2>
</div>

<div class="container w-75">
    <div class="container">
        <div class="row">

            <?php while ($customQuery->have_posts()) {
                $customQuery->the_post();
                get_template_part("template-parts/card");
            }
            ?>

        </div>
    </div>
    <span class="">
        <p class=" font-weight-bold mt-4 mb-4">იხილეთ ჩვენი წიგნების: <a href="<?php echo get_post_type_archive_link('book'); ?>">სია</a></p>
    </span>
</div>

<?php get_footer() ?>