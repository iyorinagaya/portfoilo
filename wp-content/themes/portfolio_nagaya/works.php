<?php
/*
Template Name: works
*/
?>
<?php get_header(); ?>

<main>
  <section class="worksList single">
    <div class="wrapper">
      <h2>- WORKS -</h2>
      <p class="explanation">説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明</p>
      <ul class="cards">
        <?php
          $myQuery = subLoop(3);

          if ($myQuery->have_posts()):
            while ($myQuery->have_posts()):
              $myQuery->the_post();
        ?>
        <li class="card">
          <a href="<?php the_permalink(); ?>">
            <p class="work image1"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title(); ?>"></p>
            <p class="text"><?php the_title(); ?></p>
          </a>
        </li>
        <?php
            endwhile;
          endif;
          wp_reset_postdata();
        ?>
      </ul>
      <?php
        pagination($myQuery->max_num_pages);
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>