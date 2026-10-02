<?php
/**
 * Чистка категорий товаров WooCommerce.
 *
 * Запуск через WP-CLI (из корня сайта):
 *   wp eval-file clean-product-cats.php
 *
 * $mode = 'top'     — оставить только самые верхние (корневые) категории
 * $mode = 'deepest' — оставить только самые глубокие, убрать их родителей
 * $dry_run = true   — только показать изменения, ничего не записывать
 */

$mode    = 'deepest';
$dry_run = true;

$paged   = 1;
$changed = 0;

do {
	$ids = get_posts( [
		'post_type'      => 'product',
		'post_status'    => 'any',
		'fields'         => 'ids',
		'posts_per_page' => 200,
		'paged'          => $paged,
		'orderby'        => 'ID',
		'order'          => 'ASC',
	] );

	foreach ( $ids as $product_id ) {
		$current = wp_get_object_terms( $product_id, 'product_cat', [ 'fields' => 'ids' ] );
		if ( is_wp_error( $current ) || empty( $current ) ) {
			continue;
		}
		$current = array_map( 'intval', $current );
		$new     = [];

		if ( 'top' === $mode ) {
			foreach ( $current as $term_id ) {
				$ancestors = get_ancestors( $term_id, 'product_cat', 'taxonomy' );
				// get_ancestors возвращает [родитель, дед, ..., корень]
				$new[] = $ancestors ? (int) end( $ancestors ) : $term_id;
			}
		} else { // deepest
			$parents = [];
			foreach ( $current as $term_id ) {
				$parents = array_merge( $parents, get_ancestors( $term_id, 'product_cat', 'taxonomy' ) );
			}
			$parents = array_map( 'intval', $parents );
			$new     = array_diff( $current, $parents );
		}

		$new = array_values( array_unique( $new ) );
		sort( $new );
		$old_sorted = $current;
		sort( $old_sorted );

		if ( $new === $old_sorted ) {
			continue;
		}

		$changed++;
		echo sprintf(
			"#%d %s: [%s] -> [%s]\n",
			$product_id,
			get_the_title( $product_id ),
			implode( ',', $old_sorted ),
			implode( ',', $new )
		);

		if ( ! $dry_run ) {
			wp_set_object_terms( $product_id, $new, 'product_cat', false );
			if ( function_exists( 'wc_delete_product_transients' ) ) {
				wc_delete_product_transients( $product_id );
			}
		}
	}

	$paged++;
} while ( ! empty( $ids ) );

echo ( $dry_run ? '[DRY RUN] ' : '' ) . "Товаров к изменению: {$changed}\n";
