<?php
/**
 * Custom Markup for Search form
 *
 * @package Treville
 */

?>

<form role="search" method="get" class="search-form" action="https://google.com/search">
    
        <label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'treville' ); ?></span>
                
		<input type="search" class="search-field"
			placeholder="<?php echo esc_attr_x( 'Procurar &hellip;', 'placeholder', 'treville' ); ?>"
			value="<?php echo get_search_query(); ?>" name="q"
			title="<?php echo esc_attr_x( 'Search for:', 'label', 'treville' ); ?>" />         
	</label>
	<button type="submit" class="search-submit">
		<span class="genericon-search"></span>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'treville' ); ?></span>
	</button>
        <input type="hidden" name="sitesearch" value="igc.usp.br">
    
</form> 
