<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
  <main class="single_main wrapper">
    <div class="single_main-content">
      <h2 class="single_main__item-ttl"><?php the_title(); ?></h2>
      <div class="main__item-ttl-text"><?php the_content(); ?></div>
      <div class="main__item-nav">
        <p class="main__item-date"><?php echo get_the_date('Y-m-d'); ?></p>
        <?php if (!is_category() && has_category()) : ?>
          <p class="category-tag">
            <?php $postcat = get_the_category();
            echo $postcat[0]->name;
            ?>
          </p>
        <?php endif; ?>
      </div>
      <div class=single_thumbnail>
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
        <?php endif; ?>
      </div>
    </div>
    </div>
    <p class="main__item-text"> <?php the_content(); ?></p>
    </div>
  </main>
<?php endif; ?>
<?php get_footer(); ?>