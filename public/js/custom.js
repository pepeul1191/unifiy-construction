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