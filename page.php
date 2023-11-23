<?php get_header(); ?>
<!-- メインフリーダイヤル -->
  <main>


<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<h1>
<?php the_title(); ?></h1>
<?php the_content(); ?>
<!-- コンテンツのHTMLやPHPを書く -->
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>

  </main>
  <!-- メインここまで -->
  <?php get_footer(); ?>
 