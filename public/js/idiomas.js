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
				var data = { };
				var template_compiled = null;
				/*
				$.ajax({
				   url: STATICS_URL + 'templates/accesos/sistema.html', 
				   type: "GET", 
				   async: false, 
				   success: function(source) {
				   	var template = Handlebars.compile(source);
				   	template_compiled = template(data);
				   }
				});
				return template_compiled;
				*/
				return '<h1>Español</h1>';
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
				var data = { };
				var template_compiled = null;
				/*
				$.ajax({
				   url: STATICS_URL + 'templates/accesos/sistema.html', 
				   type: "GET", 
				   async: false, 
				   success: function(source) {
				   	var template = Handlebars.compile(source);
				   	template_compiled = template(data);
				   }
				});
				return template_compiled;
				*/
				return '<h1>Ingles</h1>';
		},
});

var Router = Marionette.AppRouter.extend({
		routes: {
				'email/:email': 'showEmail',
				"" : "index", 
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