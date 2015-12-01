<?php global $post; ?>

<div class="event_element otherinfo">

    <a id="vendors_hook" class="hook"></a>

    <?php if (get_post_meta($post->ID, 'januas_vendors_showtitle', true) == 'y') { ?>

    <header class="article-header">

        <h4><?php _e('Vendors', 'januas'); ?></h4>

    </header> <!-- end article header -->

    <?php } ?>

    <section class="entry-content clearfix">



        <?php

        echo get_post_meta($post->ID, 'januas_vendors_text', true);

        ?>

    </section>

</div>