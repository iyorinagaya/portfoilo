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
      <div class="wrapper">
        <h2>- SITE OVERVIEW -</h2>
        <div class="text">
          <p>IYORI NAGAYAのポートフォリオサイトです。</p>
          <br>
          <p>フロントエンドのエンジニアとして、WEB制作等を行っています。</p>
          <br>
          <p>私のプロフィール、スキル、制作物を掲載しておりますので、是非ご覧になっていただけたら嬉しいです。</p>
        </div>
      </div>
    </section>
    <section class="works">
      <div class="wrapper">
        <h2>- WORKS -</h2>
        <p class="explanation">説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明</p>
        <ul class="cards">
          <li class="card">
            <p class="work"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/evgeniy-konev-M4DjXRLWdNA-unsplash.jpg" alt="beer1"></p>
          </li>
          <li class="card">
            <p class="work"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/timothy-dykes-Lq1rOaigDoY-unsplash.jpg" alt="beer2"></p>
          </li>
          <li class="card">
            <p class="work"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/jon-parry-C8eSYwQkwHw-unsplash.jpg" alt="beer3"></p>
          </li>
        </ul>
        <p class="btnWrap"><a class="btn" href="#">もっと見る</a></p>
      </div>
    </section>
  
    <section class="contact">
      <div class="wrapper">
        <h2>CONTACT</h2>
        <p>気になる点等、お気軽にご連絡ください。</p>
        <p>お問い合わせには、フォームをご利用しております。</p>
        <p class="btnWrap"><a class="btn" href="<?php echo home_url('/contact'); ?>">問い合わせる</a></p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>