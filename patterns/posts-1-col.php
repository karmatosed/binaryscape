<?php
/**
 * Title: List of posts, 1 column
 * Slug: binaryscape/posts-1-col
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column.
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"0px"}}} -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->
	
	<!-- wp:post-content /-->
	
	<!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"fontSize":"x-large"} /-->
	
	<!-- wp:group {"style":{"spacing":{"blockGap":"2px","padding":{"bottom":"var:preset|spacing|40"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"2px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"large"} /-->
	
	<!-- wp:template-part {"slug":"post-meta"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:group -->
	
	<!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"large"} /-->
	
	<!-- wp:query-pagination-numbers {"style":{"typography":{"letterSpacing":"8px"}},"fontSize":"medium"} /-->
	
	<!-- wp:query-pagination-next {"fontSize":"large"} /-->
	<!-- /wp:query-pagination -->
	
	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
	<p></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results --></div>
	<!-- /wp:query -->