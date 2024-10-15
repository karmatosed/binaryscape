<?php
/**
 * Title: single
 * Slug: binaryscape/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"constrained","justifyContent":"center"}} -->
<main class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--80)"><!-- wp:post-featured-image {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:post-title {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xx-large"} /-->

<!-- wp:template-part {"slug":"post-meta"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:post-content {"lock":{"move":false,"remove":false},"align":"wide","layout":{"type":"constrained","justifyContent":"center"},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-terms {"term":"post_tag","separator":"  ","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","className":"is-style-pill","fontSize":"small"} /-->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:comments {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","fontSize":"medium"} -->
<h2 class="wp-block-heading has-contrast-2-color has-text-color has-link-color has-medium-font-size"><?php echo __('Comments', 'binaryscape');?></h2>
<!-- /wp:heading -->

<!-- wp:comments-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","fontSize":"medium"} /-->

<!-- wp:comment-template {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:avatar {"size":60,"style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"width":"1px"}},"borderColor":"base"} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:comment-author-name /-->

<!-- wp:comment-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"fontSize":"small"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:comment-edit-link /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"},"fontSize":"small"} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"contrast-2","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-contrast-2-color has-alpha-channel-opacity has-contrast-2-background-color has-background is-style-default" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"/>
<!-- /wp:separator -->

<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"fontSize":"small"} /--></div>
<!-- /wp:comments -->

<!-- wp:group {"tagName":"nav","align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"textColor":"contrast-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"fontSize":"large"} -->
<nav class="wp-block-group alignwide has-contrast-2-color has-text-color has-link-color has-large-font-size" aria-label="Posts" style="border-bottom-style:none;border-bottom-width:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:post-navigation-link {"type":"previous","label":"Previous: ","linkLabel":true,"arrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","fontSize":"medium"} /-->

<!-- wp:post-navigation-link {"label":"Next: ","linkLabel":true,"arrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","fontSize":"medium"} /--></nav>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->