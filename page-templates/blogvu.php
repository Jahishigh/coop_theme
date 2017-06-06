<?php
/*
Template Name: Blogvu
*/
get_header(); ?>

<?php the_post_thumbnail() ?>
<?php the_title() ?>
<?php if (have_posts()) {
  while (have_posts()) {
    the_post();
    the_content();
  }
} ?>  

<?php get_footer(); ?>

<script id="__bs_script__">//<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
  //]]></script>
