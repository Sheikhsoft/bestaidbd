<?php get_header() ?>

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2><?php the_title() ?></h2>
                    <ul class="bread-list">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active"><?php the_title() ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <!-- Content -->


        <?php the_content() ?>


<?php }
}
?>


<?php get_footer() ?>