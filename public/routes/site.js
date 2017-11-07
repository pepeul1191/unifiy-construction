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