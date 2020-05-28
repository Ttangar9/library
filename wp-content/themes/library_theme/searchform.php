<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input
	   type="text"
	   value="<?php echo esc_attr( get_search_query() ); ?>"
	   name="s"
	   id="s"
	   placeholder="<?php esc_attr_e( 'Search &hellip;', 'shape' ); ?>"
    />
	<input type="submit" id="searchsubmit" value="Поиск" >
</form>
