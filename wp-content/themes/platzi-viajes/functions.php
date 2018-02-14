<?php


//add_action('init','add_role_viajero');

function viajes_init() {
    $labels = array(
        'name'              => _x( 'Viajes', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Viajes', 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Mis viajes', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Viajes', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', 'viaje', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nuevo viaje', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nuevo viaje', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar viaje', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver viaje', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos los viajes', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar viajes', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Viajes padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado viajes.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado viajes en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'description'       => __('Description', 'your-plugin-textdomain'),
        'public'            => true,
        'public_queryable'  => true,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'viaje' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-admin-multisite',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'viaje', $args );
}

add_action( 'init', 'viajes_init' );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'custom_field_viaje',
		'title' => 'Viaje',
		'fields' => array (
			array (
				'key' => 'field_5a83412fc9a83',
				'label' => 'Destino',
				'name' => 'destino',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a834176017b1',
				'label' => 'Vacunas obligatorias',
				'name' => 'vacunas_obligatorias',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a834189017b2',
				'label' => 'Vacunas recomendadas',
				'name' => 'vacunas_recomendadas',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a834195017b3',
				'label' => 'Transporte local',
				'name' => 'transporte',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a8341a1017b4',
				'label' => 'Peligrosidad',
				'name' => 'peligrosidad',
				'type' => 'select',
				'choices' => array (
					'Baja' => 'Baja',
					'Media' => 'Media',
					'Alta' => 'Alta',
					'Muy Alta' => 'Muy Alta',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a8341de017b5',
				'label' => 'Moneda local',
				'name' => 'moneda_local',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'viaje',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


function rutas_init() {
    $labels = array(
        'name'              => _x( 'Rutas', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Ruta', 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Mis Rutas', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Rutas', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nueva', 'ruta', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nueva ruta', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nueva ruta', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar ruta', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver ruta', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todas las rutas', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar rutas', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Rutas padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado rutas.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado rutas en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'description'       => __('Description', 'your-plugin-textdomain'),
        'public'            => true,
        'public_queryable'  => true,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'ruta' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-chart-area',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'ruta', $args );
}

add_action( 'init', 'rutas_init' );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'custom_field_ruta',
		'title' => 'Ruta',
		'fields' => array (
			array (
				'key' => 'Ruta_dificultad',
				'label' => 'Dificultad',
				'name' => 'dificultad',
        'type' => 'select',
				'choices' => array (
					'Baja' => 'Baja',
					'Media' => 'Media',
					'Alta' => 'Alta',
					'Muy Alta' => 'Muy Alta',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'ruta_tiempo',
				'label' => 'Tiempo',
				'name' => 'tiempo',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'ruta',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

//  ?>
