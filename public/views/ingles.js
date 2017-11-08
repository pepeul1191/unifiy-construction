var InglesView = Backbone.View.extend({
		el: '#body-app',
		initialize: function(){
				//this.render();
				//console.log("initialize");
		},
		render: function() {
				this.$el.html(this.getTemplate());
				var contacto = new ContactoIngles();
				var x = new FormContactoView({model:contacto});

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
