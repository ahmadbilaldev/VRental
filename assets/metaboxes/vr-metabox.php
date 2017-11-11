<?php

/**
 * The metabox file.
 *
 * @since 1.0.0
 */
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
    add_meta_box( 'my-meta-box-id', 'Meta Box', 'vr_metabox_cb', 'post', 'side', 'high' );
}
