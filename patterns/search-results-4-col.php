<?php
/**
 * Title: Search Results 4 col
 * Slug: ask-design-blog-child/search-results
 * Categories: Posts
 */
?>
<!-- wp:query {"queryId":206,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"metadata":{"name":"Search Results"},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"aspectRatio":"4/3"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">Sorry, but nothing was found. Please try a different category.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->