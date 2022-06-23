<?php get_header(); ?>
<div class="category_main_ttl">
  <h1 class="category_ttl"><?php single_cat_title(); ?></h1>
</div>
<main class="category_main wrapper">
  <div class="category_main-content">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="category_main__item">
          <div class="main__item-warap"><a href="<?php the_permalink(); ?>">
              <h2 class="main__item-ttl">
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                  $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                  echo $title . '…';
                } else {
                  echo $post->post_title;
                }
                ?>
              </h2>
              <p class="main__item-ttl-text"><?php the_content(); ?></p>
              <p class="main__item-nav">
                <span class="main__item-date"><?php echo get_the_date('Y-m-d'); ?></span>
              </p>
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
              <?php endif; ?>
            </a></div>
          <p class="main__item-text"><?php the_content(); ?></p>
          <p class="main__item-link"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <!-- 投稿が無い場合の処理 -->
      <p>投稿が見つかりません。</p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>