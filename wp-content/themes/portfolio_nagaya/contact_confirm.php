<?php
/*
Template Name: contact_confirm
*/
?>
<?php get_header(); ?>

<main>
  <div class="confirmWrapper">
    <h2>- CONTACT -</h2>
    <p class="text">以下の内容でよろしければ<strong>送信</strong>を押してください。</p>
    <?php
      $data = get_page_by_path('contact_confirm');
      $id = $data->ID;
      $post = get_post($id);
      echo apply_filters('the_content',$post->post_content);
    ?>
  </div>
</main>

<?php get_footer(); ?>