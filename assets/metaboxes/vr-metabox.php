<?php

function vr_metabox_cb()
{
    ?>
    <label for="my_meta_box_text">Text Label</label>
    <input type="text" name="my_meta_box_text" id="my_meta_box_text" />
    <?php
}

add_action( 'add_meta_boxes', 'vr_metabox' );
function vr_metabox()
{
    add_meta_box( 'my-meta-box-id', 'My First Meta Box', 'vr_metabox_cb', 'post', 'normal', 'high' );
}
