<?php get_header(); ?>
<div class="archive">
  <h3 class="archive__title">Archive</h3>
  <ul class="archive__item-list">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <li class="archive__item"><a href="<?php the_permalink(); ?>">
            <span>
              <?php
              $days = 3;
              $today = date_i18n('U');
              $entry_day = get_the_time('U');
              $keika = date('U', ($today - $entry_day)) / 86400;
              if ($days > $keika) :
                $limit = 3;
                $num = $wp_query->current_post;
                if ($limit > $num) :
                  echo 'New';
                endif;
              endif;
              ?>
            </span>
            <span><?php echo get_the_date('Y-m-d'); ?></span>
            <span><?php the_permalink(); ?></span></a></li>
    <?php endwhile;
    endif; ?>
  </ul>
</div>
<?php get_footer(); ?>