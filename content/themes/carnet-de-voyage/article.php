<?php
/*
Template Name: Creer article
*/
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {

    // Do some minor form validation to make sure there is content
    if (isset ($_POST['title'])) {
        $title =  $_POST['title'];
    } else {
        echo 'Entrer un titre';
    }
    if (isset ($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        echo 'Enter du texte';
    }

    $tags = $_POST['post_tags'];

    // ADD THE FORM INPUT TO $new_post ARRAY
    $new_post = array(
    'post_title'    =>   $title,
    'post_content'  =>   $description,
    'post_category' =>   array($_POST['cat']),  // Usable for custom taxonomies too
    'tags_input'    =>   array($tags),
    'post_status'   =>   'publish',           // Choose: publish, preview, future, draft, etc.
    'post_type' =>   'post'  //'post',page' or use a custom post type if you want to
    );

    //SAVE THE POST
    $pid = wp_insert_post($new_post);
    if ($_FILES) {
    foreach ($_FILES as $file => $array) {
    $newupload = insert_attachment($file,$pid);
    // $newupload returns the attachment id of the file that
    // was just uploaded. Do whatever you want with that now.
    }
}

             //SET OUR TAGS UP PROPERLY
    wp_set_post_tags($pid, $_POST['post_tags']);

    //REDIRECT TO THE NEW POST ON SAVE
    $link = get_permalink( $pid );
    wp_redirect( $link );

}


do_action('wp_insert_post', 'wp_insert_post');
?>
<?php get_header(); ?>


<div class="postart">
<form id="new_post" name="new_post" method="post" action="" class="wpcf7-form" enctype="multipart/form-data">
    <!-- post name -->
    <fieldset name="name">
        <label for="title">Titre</label>
        <input type="text" class="titlefieldset" value="" tabindex="5" name="title" />
    </fieldset>

    <!-- post Category -->
    <fieldset class="category">
        <label for="cat">Catégorie</label>
        <?php wp_dropdown_categories( 'tab_index=10&taxonomy=category&hide_empty=0' ); ?>
    </fieldset>

    <!-- post Content -->

    <fieldset class="content">
        <label for="description">Texte</label>
        <textarea id="description" tabindex="15" name="description" cols="100" rows="50"></textarea>
    </fieldset>

    <!-- images -->
<fieldset class="images">
<label for="images">Image</label>
<input type="file" name="bottle_front" id="bottle_front" size="50">
</fieldset>



    <fieldset class="submit">
        <input type="submit" value="Poster" tabindex="40" id="submit" name="submit" />
    </fieldset>

    <input type="hidden" name="action" value="new_post" />
    <?php wp_nonce_field( 'new-post' ); ?>
</form>
</div>
<?php get_footer(); ?>
