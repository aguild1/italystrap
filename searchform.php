<?php
/**
 * Form for search in WordPress site
 * @link https://codex.wordpress.org/Function_Reference/get_search_form
 * Add markup for Sitelinks Search Box, @see link below for more informations
 * @link https://developers.google.com/structured-data/slsb-overview
 */
?>
<div itemscope itemtype="http://schema.org/WebSite">
	<meta itemprop="url" content="<?php echo home_url(); ?>"/>
	<form  role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url(); ?>" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
		<meta itemprop="target" content="<?php echo home_url(); ?>/?s={s}"/>
		<div class="input-group input-group-sm">
			<span class="screen-reader-text sr-only"><?php _e('Search now', 'ItalyStrap'); ?></span>
			<input type="search" size="16" placeholder="<?php _e('Search now', 'ItalyStrap'); ?>" value="<?php if ( is_search() ) echo get_search_query();?>" name="s" class="form-control" itemprop="query-input" >
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default" value="<?php _e('Search', 'ItalyStrap'); ?>"><i class="glyphicon glyphicon-search"></i></button>
			</span>
		</div>
	</form>
</div>