<?php get_header(); ?>

<main>
  <section class="worksSingle single">
    <div class="wrapper">
      <h2>- WORKS -</h2>
      <div class="mainText">
        <h3><?php the_title(); ?></h3>
        <p class="text"><?php the_content(); ?></p>
      </div>
      <p class="thumbnail"><?php the_post_thumbnail(); ?></p>
    </div>
  </section>
</main>

<?php get_footer(); ?>