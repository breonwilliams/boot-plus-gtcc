<?php
/**
 * Taxonomy Posts List
 */
function gtcc_taxonomy_list( $atts ) {
	$a = shortcode_atts( array(
		'taxonomy' => '',
		'post-type' => 'post',
		'type' => 'list',
		'title' => '',
	), $atts );
	$filter_text = '';
	// Make sure the taxonomy field is valid and it exists
	if( $a['taxonomy'] !== '' && taxonomy_exists( $a['taxonomy'] ) ) {
		$taxonomy = get_taxonomy( $a['taxonomy'] );
		$tax_url = get_post_type_archive_link( $a['post-type'] ) . '?' . $taxonomy->name . '=';
		$taxonomy_name = ucfirst( $taxonomy->labels->name );

		if( $a['type'] == 'list' ) {

			$filter_text .= '<div class="taxonomy-list taxonomy-' . $taxonomy->name . '">';
			if( $a['title'] !== '' ) {
				$filter_text .= '<h3 class="info-head">' . $a['title'] . '</h3>';
			} else {
				$filter_text .= '<h3 class="info-head">Search By ' . $taxonomy->labels->singular_name . '</h3>';
			}
			$filter_text .= '<ul>';

			$args = array(
				'orderby' => 'name',
				'order' => 'ASC',
			);
			$terms = get_terms( $taxonomy->name, $args );
			foreach( $terms as $term ) {
				$filter_text .= '<li><a href="' . get_term_link( $term, $taxonomy->name ) . '" title="' . $term->name . '">' . $term->name . '</a></li>';
			}

			$filter_text .= '</ul></div>';

		} elseif( $a['type'] == 'dropdown' ) {

			$filter_text .= '<div class="taxonomy-list taxonomy-' . $taxonomy->name . '"><form name="type_jump">';
			if( $a['title'] !== '' ) {
				$filter_text .= '<h3 class="info-head">' . $a['title'] . '</h3>';
			} else {
				$filter_text .= '<h3 class="info-head">Search By ' . $taxonomy->labels->singular_name . '</h3>';
			}
			$filter_text .= '<select class="input-block-level select" name="' . $taxonomy->name . '" OnChange="window.location=this.options[this.selectedIndex].value;">';

			$args = array(
				'orderby' => 'name',
				'order' => 'ASC',
			);

			$filter_text .= '<option value="">Select A ' . $taxonomy->labels->singular_name . '</option>';

			$terms = get_terms( $taxonomy->name, $args );
			foreach( $terms as $term ) {
				$filter_text .= '<option value="' . $tax_url . $term->slug . '">' . $term->name . '</option>';
			}

			$filter_text .= '</select></form></div>';

		}
	}
	return $filter_text;
}
add_shortcode( 'gtcc_taxonomy_list', 'gtcc_taxonomy_list' );