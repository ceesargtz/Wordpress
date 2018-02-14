<?php if ( ! function_exists( 'storefront_post_content_viaje' ) ) {
	/**
	 * Display the post content with a link to the single post
	 *
	 * @since 1.0.0
	 */
	function storefront_post_content_viaje() {
		?>
		<divclass="entry-content">
			<h1>Funcion <strong>storefront_post_content_viaje()</strong></h1>
			<h2>Funcion almacenada en el archivo functions.php del tema hijo</h2>
		<?php

		/**
		 * Functions hooked in to storefront_post_content_before action.
		 *
		 * @hooked storefront_post_thumbnail - 10
		 */
		do_action( 'storefront_post_content_before' );

		the_content(
			sprintf(
				__( 'Continue reading %s', 'storefront' ),
				'<span class="screen-reader-text">' . get_the_title() . '</span>'
			)
		);

		$campos_viaje = get_post_custom( $post_id );
		?>

		<divclass="campos_viaje">
			<divclass="campo_viaje">
				<divclass="viaje_label">
					<strong>Destino: &nbsp;</strong>
				</div>
				<divclass="viaje_valor">
					<?phpecho $campos_viaje['destino'][0]; ?>
				</div>
			</div>
			<divclass="campo_viaje">
				<divclass="viaje_label">
					<strong>Vacunas Requeridas: &nbsp;</strong>
				</div>
				<divclass="viaje_valor">
					<?phpecho $campos_viaje['vacunas_requeridas'][0]; ?>
				</div>
			</div>
			<divclass="campo_viaje">
				<divclass="viaje_label">
					<strong>Vacunas Recomendadas: &nbsp;</strong>
				</div>
				<divclass="viaje_valor">
					<?phpecho $campos_viaje['vacunas_recomendadas'][0]; ?>
				</div>
			</div>
			<divclass="campo_viaje">
				<divclass="viaje_label">
					<strong>Nivel de Peligro: &nbsp;</strong>
				</div>
				<divclass="viaje_valor">
					<?phpecho $campos_viaje['nivel_de_peligro'][0]; ?>
				</div>
			</div>
			<divclass="campo_viaje">
				<divclass="viaje_label">
					<strong>Moneda Local: &nbsp;</strong>
				</div>
				<divclass="viaje_valor">
					<?phpecho $campos_viaje['moneda_local'][0]; ?>
				</div>
			</div>
		</div>


		<?php
		do_action( 'storefront_post_content_after' );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'storefront' ),
			'after'  => '</div>',
		) );
		?>
		</div><!-- .entry-content -->
		<?php
	}
}


/////////////////////////////////////////////
////////////////////////////////////////////
/**
 * Posts
 *
 * @see  storefront_post_header()
 * @see  storefront_post_meta()
 * @see  storefront_post_content()
 * @see  storefront_post_content_viaje()
 * @see  storefront_paging_nav()
 * @see  storefront_single_post_header()
 * @see  storefront_post_nav()
 * @see  storefront_display_comments()
 */
add_action( 'storefront_loop_post',           'storefront_post_header',          10 );
add_action( 'storefront_loop_post',           'storefront_post_meta',            20 );
add_action( 'storefront_loop_post',           'storefront_post_content',         30 );
add_action( 'storefront_loop_after',          'storefront_paging_nav',           10 );
add_action( 'storefront_single_post',         'storefront_post_header',          10 );
add_action( 'storefront_single_post',         'storefront_post_meta',            20 );
add_action( 'storefront_single_post',         'storefront_post_content',         30 );
add_action( 'storefront_single_post_viaje',   'storefront_post_header',          10 );
add_action( 'storefront_single_post_viaje',   'storefront_post_meta',            20 );
add_action( 'storefront_single_post_viaje',   'storefront_post_content_viaje',   30 );
add_action( 'storefront_single_post_bottom',  'storefront_post_nav',             10 );
add_action( 'storefront_single_post_bottom',  'storefront_display_comments',     20 );
add_action( 'storefront_post_content_before', 'storefront_post_thumbnail',       10 );
