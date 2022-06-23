<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
<main class="contact_form wrapper">
  <p class="contact_form_ttl">お問い合わせ</p>
  <form class="form">
    <?php echo do_shortcode('[contact-form-7 id="25" title="お問い合わせフォーム"]'); ?>
  </form>
</main>

<?php get_footer(); ?>