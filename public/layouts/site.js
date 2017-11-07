Handlebars.registerHelper('list_menu', function(menu) {
		rpta = '';
	  menu.forEach(function(item) {
	  		rpta = rpta + '<li class="nav-item g-ml-8--lg"><a href="' + item['url'] + '" class="nav-link p-0">' + item['nombre'] + '</a></li>';
			});

			return rpta;
});