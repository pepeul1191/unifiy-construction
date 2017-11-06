Handlebars.registerHelper('list_menu', function(menu) {
		rpta = '';
	  menu.forEach(function(item) {
	  		rpta = rpta + '<li class="nav-item g-ml-8--lg"><a href="' + item['url'] + '" class="nav-link p-0">' + item['nombre'] + '</a></li>';
			});

			return rpta;
});

var EspaniolView = Backbone.View.extend({
		el: '#body-app',
		initialize: function(){
				//this.render();
				//console.log("initialize");

		},
		render: function() {
				this.$el.html(this.getTemplate());
				$.HSCore.components.HSCarousel.init('.js-carousel');

				$('#carouselCus1').slick('setOption', 'responsive', [{
						breakpoint: 1200, 
						settings: {
						slidesToShow: 4
						}
						}, {
						breakpoint: 992,
						settings: {
						slidesToShow: 2
						}
						}, {
						breakpoint: 576,
						settings: {
						slidesToShow: 1
						}
						}], true);

				$('#carouselCus2').slick('setOption', 'responsive', [{
						breakpoint: 1200,
						settings: {
						slidesToShow: 6
						}
						}, {
						breakpoint: 992,
						settings: {
						slidesToShow: 4
						}
						}, {
						breakpoint: 768,
						settings: {
						slidesToShow: 2
						}
						}, {
						breakpoint: 576,
						settings: {
						slidesToShow: 1
						}
						}], true);

				// initialization of header
				$.HSCore.components.HSHeader.init($('#js-header'));
				$.HSCore.helpers.HSHamburgers.init('.hamburger');

				// initialization of HSScrollNav component
				$.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
				duration: 700,
				easing: 'easeOutExpo'
				});

				// initialization of tabs
				$.HSCore.components.HSTabs.init('[role="tablist"]');

				// initialization of go to section
				$.HSCore.components.HSGoTo.init('.js-go-to');

				$('.thumbs').portfolio({
						cols: 4,
						transition: 'slideDown'
				});

				return this;
		},
		getTemplate: function() {
				var template_compiled = null;
				$.ajax({
				   url: BASE_URL + 'contenido/home_espaniol', 
				   type: "GET", 
				   async: false, 
				   success: function(data) {
				   		var contenido = JSON.parse(data);
				   		//console.log(contenido);
				   		var source = $('#template').html();
				   		var template = Handlebars.compile(source);
									template_compiled = template(contenido);
				   }
				});

				return template_compiled;
		},
});

var InglesView = Backbone.View.extend({
		el: '#body-app',
		initialize: function(){
				//this.render();
				//console.log("initialize");
		},
		render: function() {
				this.$el.html(this.getTemplate());
				$.HSCore.components.HSCarousel.init('.js-carousel');

				$('#carouselCus1').slick('setOption', 'responsive', [{
						breakpoint: 1200, 
						settings: {
						slidesToShow: 4
						}
						}, {
						breakpoint: 992,
						settings: {
						slidesToShow: 2
						}
						}, {
						breakpoint: 576,
						settings: {
						slidesToShow: 1
						}
						}], true);

				$('#carouselCus2').slick('setOption', 'responsive', [{
						breakpoint: 1200,
						settings: {
						slidesToShow: 6
						}
						}, {
						breakpoint: 992,
						settings: {
						slidesToShow: 4
						}
						}, {
						breakpoint: 768,
						settings: {
						slidesToShow: 2
						}
						}, {
						breakpoint: 576,
						settings: {
						slidesToShow: 1
						}
						}], true);

				// initialization of header
				$.HSCore.components.HSHeader.init($('#js-header'));
				$.HSCore.helpers.HSHamburgers.init('.hamburger');

				// initialization of HSScrollNav component
				$.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
				duration: 700,
				easing: 'easeOutExpo'
				});

				// initialization of tabs
				$.HSCore.components.HSTabs.init('[role="tablist"]');

				// initialization of go to section
				$.HSCore.components.HSGoTo.init('.js-go-to');

				$('.thumbs').portfolio({
						cols: 4,
						transition: 'slideDown'
				});
				
				return this;
		},
		getTemplate: function() {
				var template_compiled = null;
				$.ajax({
				   url: BASE_URL + 'contenido/home_ingles', 
				   type: "GET", 
				   async: false, 
				   success: function(data) {
				   		var contenido = JSON.parse(data);
				   		//console.log(contenido);
				   		var source = $('#template').html();
				   		var template = Handlebars.compile(source);
									template_compiled = template(contenido);
				   }
				});

				return template_compiled;
		},
});

var Router = Marionette.AppRouter.extend({
		routes: {
				'email/:email': 'showEmail',
				"" : "espaniol", 
				"es" : "espaniol",
				"en" : "ingles",
				"*actions" : "index"
		},
		showEmail: function(email) {
				// show the email
				alert(email);
		},
		espaniol: function(){
				var espaniolView = new EspaniolView({});
				espaniolView.render();
		},
		ingles: function(){
				var inglesView = new InglesView({});
				inglesView.render();
		},
});
    
var App = Marionette.Application.extend({
		region: '#body-app',
		onStart() {
				var router = new Router();
				Backbone.history.start();
		}
});

var myApp = new App();
myApp.start();

$(".thumbs").portfolio({
    cols: 4, // Number of columns you want your thumbnails to take. Default is 3
    transition: 'slideDown' // What jQuery transition effect you want. Default is slideDown
});