<?php
/**
 * Title: front-page
 * Slug: ask-design-blog-child/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"3.75rem","bottom":"0"}}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:3.75rem;margin-bottom:0">Recent Articles</h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:2.5rem;padding-bottom:2.5rem"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":30,"query":{"perPage":1,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Sorry, but nothing was found. Please try a search with different keywords.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":31,"query":{"perPage":1,"pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":32,"query":{"perPage":1,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-title {"level":1,"isLink":true} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /-->

<!-- wp:post-excerpt {"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":33,"query":{"perPage":1,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":34,"query":{"perPage":1,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:2.5rem;padding-bottom:2.5rem"><!-- wp:query {"queryId":35,"query":{"perPage":2,"pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:2.5rem;padding-bottom:2.5rem"><!-- wp:query {"queryId":36,"query":{"perPage":6,"pages":0,"offset":"7","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.askdesign.biz/blog/articles/">More Articles</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"subscribe-section"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"-1.2rem"}},"border":{"top":{"color":"var:preset|color|custom-primary-200","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--custom-primary-200);border-top-width:1px;margin-top:-1.2rem;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"center"}}} -->
<h5 class="wp-block-heading has-text-align-center">Looking for Something on this Site?</h5>
<!-- /wp:heading -->

<!-- wp:shortcode -->
[ivory-search id="14563" title="Default Search Form_ask"]
<!-- /wp:shortcode -->

<!-- wp:categories {"displayAsDropdown":true,"showOnlyTopLevel":true} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"center"}}} -->
<h5 class="wp-block-heading has-text-align-center">Copyright</h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>© 2000-2026 Anne S. Katzeff. All rights reserved. Unless noted, all artwork and text are copyrighted by the artist. Images may not be reproduced, manipulated, or used in any way without Anne’s written permission.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"border":{"top":{"color":"var:preset|color|custom-primary-200","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--custom-primary-200);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}},"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-x-large-font-size">Peggy Kornegger’s Books</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Art and Design by Anne</h3>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"bottom","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize"}}} -->
<h5 class="wp-block-heading" style="text-transform:capitalize"><em><a href="https://amzn.to/3QCjevB" target="_blank" rel="noopener">Breast Cancer &amp; Beyond: An Unexpected Soul Path</a></em></h5>
<!-- /wp:heading -->

<!-- wp:image {"lightbox":{"enabled":false},"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="https://amzn.to/3QCjevB" target="_blank" rel=" noopener"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/kornegger-breastcancerbeyond-cover-ofcp-kdp-front-388x600.jpg" alt="Kornegger book: Breast Cancer &amp; Beyond" class=""/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" href="https://amzn.to/3QCjevB">BUY THE BOOK!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize"}}} -->
<h5 class="wp-block-heading" style="text-transform:capitalize"><em><a href="https://amzn.to/4zxv7bc" target="_blank" rel="noreferrer noopener">Inside the Rainbow: Soul Connection in Nature</a></em></h5>
<!-- /wp:heading -->

<!-- wp:image {"lightbox":{"enabled":false},"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="https://amzn.to/4zxv7bc" target="_blank" rel=" noopener"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/kornegger-rainbow-cover-ofcp-kdp-front-388x600.jpg" alt="Kornegger book: Inside the Rainbow" class=""/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" href="https://amzn.to/4zxv7bc" target="_blank" rel="noreferrer noopener">BUY THE BOOK!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize"}}} -->
<h5 class="wp-block-heading" style="text-transform:capitalize"><em><a href="https://amzn.to/4hHQpwl" target="_blank" rel="noopener">Lose Your Mind, Open Your Heart: Limitless Love on an Evolving Planet</a></em></h5>
<!-- /wp:heading -->

<!-- wp:image {"lightbox":{"enabled":false},"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="https://amzn.to/4hHQpwl" target="_blank" rel=" noopener"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/kornegger-loseyourmind-cover-reprint-ofcp-kdp-front-388x600.jpg" alt="Kornegger book: loseyourmind front cover" class=""/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" href="https://amzn.to/4hHQpwl" target="_blank" rel="noreferrer noopener">BUY THE BOOK!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize"}}} -->
<h5 class="wp-block-heading" style="text-transform:capitalize"><em><a href="https://amzn.to/3vzI1on" target="_blank" rel="noreferrer noopener">Living with Spirit: Journey of a Flower Child</a></em></h5>
<!-- /wp:heading -->

<!-- wp:image {"lightbox":{"enabled":false},"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="https://amzn.to/3vzI1on" target="_blank" rel=" noopener"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/kornegger-livingwithspirit-cover-reprint-ofcp-kdp-front-388x600.jpg" alt="Living with Spirit: Journey of a Flower Child, by Peggy Kornegger" class=""/></a></figure>
<!-- /wp:image -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" href="https://amzn.to/3vzI1on" target="_blank" rel="noreferrer noopener">BUY THE BOOK!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"border":{"top":{"color":"var:preset|color|custom-primary-200","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--custom-primary-200);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}},"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-x-large-font-size">Affiliate Partners</h3>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
<div class="wp-block-columns has-medium-font-size"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading">Affiliate Disclosure</h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This website contains affiliate links, which means I may get a small commission (at no cost to you) if you use these links to make a purchase.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize"}}} -->
<h5 class="wp-block-heading" style="text-transform:capitalize"><a href="https://amzn.to/45IVo8M" target="_blank" rel="noreferrer noopener">AMAZON - Photo, Video &amp; Design Software</a></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>As an Amazon Associate, I earn from qualifying purchases. </p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize"}}} -->
<h5 class="wp-block-heading" style="text-transform:capitalize"><a href="https://www.siteground.com/web-hosting.htm?afimagecode=ac4a791d0fe887905b14d16fdac590f2">SITEGROUND</a> - Shared web hosting</h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize"}}} -->
<h5 class="wp-block-heading" style="text-transform:capitalize"><a href="https://www.wqwln8trk.com/CBMZSN6ST/724Q1H9KF/">WP ENGINE</a> - Managed web hosting</h5>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->