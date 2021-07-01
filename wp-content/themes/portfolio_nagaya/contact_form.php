<?php
/*
Template Name: contact_form
*/
?>
<?php get_header(); ?>

<main>
  <div class="formWrapper">
    <h2>- CONTACT -</h2>
    <p class="text">このサイトに関するお問い合わせやご要望がある場合こちらからご連絡ください。</p>
      <?php
        $data = get_page_by_path('contact_form');
        $id = $data->ID;
        $post = get_post($id);
        echo apply_filters('the_content',$post->post_content);
      ?>
  </div>
</main>

<?php get_footer(); ?>