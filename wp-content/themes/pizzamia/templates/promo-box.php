<!-- Promo Box -->


<section class="promo-box">
    <div class="container">
        <ul class="row">
            <?php
            $query = new WP_Query(array('category_name' => 'promo', 'posts_per_page' => 3));


            if ($query->have_posts()) : while ($query->have_posts()) :
            $query->the_post(); ?>


            <!-- Box 1 -->
            <li class="col-md-4">
                <article><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <div class="over-hover">
                        <div class="position-center-center"><a href="<?php echo get_permalink();?>" class="btn btn-small btn-round">Read More</a>
                        </div>
                    </div>
                    <?php the_title('<h6>', '</h6>'); ?>
                </article>
            </li>

            <?php endwhile; else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif;
            wp_reset_postdata(); ?>
        </ul>


    </div>
</section>