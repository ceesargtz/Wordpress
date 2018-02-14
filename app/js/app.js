var app = {

	init: function() {
		app.getPosts();
	},

	getPosts: function() {

		var rootURL = 'http://localhost/wordpress/wp-json/wp/v2';

		$.ajax({
			type: 'GET',
			url: rootURL + '/viaje',
			dataType: 'json',
			success: function(data){

				$.each(data, function(index, value) {
					alert(JSON.stringify(value));
					//console.log(value.featured_image);
			      $('ul.topcoat-list').append('<li class="topcoat-list__item">' +
			      //	'<img src="'+value.featured_image.attachment_meta.sizes.medium.url+'" /><br>' +
			      	'<h3>'+value.title.rendered+'</h3>' +
			      	'<p>'+value.content.rendered+'</p>' +
							'<p>Destino: '+value.destino+'</p>' +
							'<p>Vacunas Obligatorias: '+value.vacunas_obligatorias+'</p>' +
							'<p>Vacunas recomendadas: '+value.vacunas_recomendadas+'</p>' +
							'<p>Transport Local: '+value.transporte_local+'</p>' +
							'<p>Peligrosidad '+value.peligrosidad+'</p>' +
							'<p>Moneda local: '+value.moneda_local+'</p>' +
							'</li>');
			    });
			},
			error: function(error){
				console.log(error);
			}

		});

	}

}
