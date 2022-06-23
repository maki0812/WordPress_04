<?php get_header(); ?>
<div class="pick wrapper">
  <article class="pick-item">
    <img src="img/pickup1.jpg" alt="" />
    <h3 class="pick-ttl">タイトル</h3>
    <p class="pick-text">テキストテキストテキストテキストテキストテキストテキスト</p>
    <p class="pick-link"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
  </article>
  <article class="pick-item">
    <img src="img/pickup2.jpg" alt="" />
    <h3 class="pick-ttl">タイトル</h3>
    <p class="pick-text">テキストテキストテキストテキストテキストテキストテキスト</p>
    <p class="pick-link"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
  </article>
  <article class="pick-item">
    <img src="img/pickup3.jpg" alt="" />
    <h3 class="pick-ttl">タイトル</h3>
    <p class="pick-text">テキストテキストテキストテキストテキストテキストテキスト</p>
    <p class="pick-link"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
  </article>
</div>



<main class="main wrapper">
  <div class="main-content">
    <article class="main__item">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
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
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
              <?php endif; ?>
            </a></div>
          <p class="main__item-text">
            <?php
            if (mb_strlen($post->post_content, 'UTF-8') > 100) {
              $content = mb_substr(strip_tags($post->post_content), 0, 100, 'UTF-8');
              echo $content . '…';
            } else {
              echo strip_tags($post->post_content);
            }
            ?>
          </p>
          <p class="main__item-link"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
        <?php endwhile; ?>
      <?php else : ?>
        <p>投稿が見つかりません。</p>
      <?php endif; ?>
    </article>
    <div class="pagination">
      <?php
      $args = array(
        'mid_size' => 1,
        'prev_text' => '&lt;&lt;前へ',
        'next_text' => '次へ&gt;&gt;',
        'screen_reader_text' => ' ',
      );
      the_posts_pagination($args);
      ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>