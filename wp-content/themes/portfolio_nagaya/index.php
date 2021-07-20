<?php get_header(); ?>

<main>
  <div class="firstView">
    <div class="firstViewWrapper">
      <div class="introduction">
        <h1 class="myName">IYORI NAGAYA</h1>
        <p class="portfolio">PORTFOLIO</p>
      </div>
    </div>
  </div>
  <section class="overview">
    <div class="wrapper show slideLeft">
      <h2>- SITE OVERVIEW -</h2>
      <div class="text">
        <p>ご訪問いただきありがとうございます。</p>
        <p>IYORI NAGAYAのポートフォリオサイトです。</p>
        <p>フロントエンドのエンジニアとして、WEB制作等を行っています。</p>
        <p>私のプロフィール、スキル、制作物を掲載しておりますので、是非ご覧になっていただけたら嬉しいです。</p>
      </div>
    </div>
  </section>
  <section class="works">
    <div class="wrapper show slideRight">
      <h2>- WORKS -</h2>
      <p class="explanation">説明説明説明説明説明説明説明説明説明説明説明説明説明説明</p>
      <ul class="cards">
        <?php
          $myQuery = subLoop(3);

          if ($myQuery->have_posts()):
            while ($myQuery->have_posts()):
              $myQuery->the_post();
        ?>
        <li class="card">
          <a href="<?php the_permalink(); ?>">
            <p class="work"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="beer3"></p>
          </a>
          <p class="text"><?php the_title(); ?></p>
        </li>
        <?php
            endwhile;
          endif;
          wp_reset_postdata();
        ?>
      </ul>
      <p class="btnWrap"><a class="btn" href="<?php echo home_url('/works'); ?>">もっと見る</a></p>
    </div>
  </section>

  <section class="contact">
    <div class="wrapper">
      <h2>- CONTACT -</h2>
      <p class="text">気になる点等ございましたら、お気軽にご連絡ください。</p>
      <p class="text">お問い合わせにはフォームをご利用ください。</p>
      <p class="btnWrap"><a class="btn" href="<?php echo home_url('/contact'); ?>">問い合わせる</a></p>
    </div>
  </section>
</main>

<?php get_footer(); ?>