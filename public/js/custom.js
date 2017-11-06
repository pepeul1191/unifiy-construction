var EspaniolView = Backbone.View.extend({
		el: '#body-app',
		initialize: function(){
				//this.render();
				//console.log("initialize");
		},
		render: function() {
				this.$el.html(this.getTemplate());
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