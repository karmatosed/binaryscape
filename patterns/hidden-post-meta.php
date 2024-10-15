<?php
/**
 * Title: post-meta
 * Slug: binaryscape/post-meta
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","layout":{"type":"constrained","justifyContent":"left"},"fontSize":"small"} -->
<div class="wp-block-group has-contrast-3-color has-text-color has-link-color has-small-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group has-contrast-2-color has-text-color has-link-color"><!-- wp:post-date {"format":"Y-m-d","isLink":true} /-->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo __('—', 'binaryscape');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo __('by', 'binaryscape');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-terms {"term":"category","prefix":"in "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->