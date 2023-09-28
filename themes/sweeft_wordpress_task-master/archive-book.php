<?php get_header(); ?>

<div class="container w-75">
    <h2 class="mt-4">ბოლოს დამატებული </h2>
</div>

<div class="container w-75">
    <div class="container">
        <div class="row">
            <?php 
                while(have_posts()) {
                the_post();
                get_template_part("template-parts/card");
            } ?>
        </div>
    </div>
</div>

<!-- Pagination Links -->
<div class="container w-75">
    <div class="pagination">
        <?php
            the_posts_pagination();
        ?>
    </div>
</div>

<?php get_footer(); ?>
