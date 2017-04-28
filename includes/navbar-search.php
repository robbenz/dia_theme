<form class="navbar-form navbar-left"
			role="search"
			method="get"
			action="https://diamedicalusa.com/"
			id="searchform">

	<div class="form-group">

		<input class="search-field form-control search_input"
					 type="text search"
					 value=""
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
