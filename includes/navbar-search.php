<?php
/*
Navbar search form
==================
echo get_search_query();
If you don't want a search form in your navbar, then delete the link to this PHP page from within the navbar in header.php.

Then you can insert the Search Widget into the sidebar.
*/
?>

<form class="navbar-form navbar-left"
			role="search"
			method="get"
			action="<?php echo esc_url( home_url( '/' ) ); ?>"
			id="searchform">

	<div class="form-group">

		<input class="search-field form-control"
					 type="text search"
					 value="<?php echo get_search_query() ?>"
					 placeholder=""
					 name="s"
					 id="s"/>

		 <input type="hidden"
		 				name="post_type"
						value="product"/>

	</div>

	<button type="submit"
					value="<?php esc_attr_x('Search', 'bst') ?>"
					class="btn btn-default"
					id="searchsubmit">

					<i class="glyphicon glyphicon-search"></i>
	</button>
</form>
