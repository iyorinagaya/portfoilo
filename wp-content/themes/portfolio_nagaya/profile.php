<?php
/*
Template Name: profile
*/
?>

<?php get_header(); ?>

<main>
  <section class="profile single">
    <div class="wrapper">
      <h2>- PROFILE -</h2>
      <div class="profileItems">
        <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/tynebridge.jpg" alt="myImage"></div>
        <div class="description">
          <div class="introduction">
            <h3 class="name">Iyori Nagaya</h3>
            <p class="position">programmer</p>
            <p class="text">自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介</p>
          </div>
          <div class="skills">
            <h3 class="skill">SKILLS</h3>
            <div class="skillBoxes">
              <div class="frontend box">
                <p>1. フロントエンド</p>
                <ul class="skillList">
                  <li>HTML/CSS</li>
                  <li>JavaScript (JQuery)</li>
                  <li>WordPress</li>
                </ul>
              </div>
              <div class="others box">
                <p>2. その他</p>
                <ul class="skillList">
                  <li>Git (Github)</li>
                  <li>Linux</li>
                  <li>English (IELTS7.0)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>