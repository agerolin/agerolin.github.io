$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
 	    userId: 'b327a217772c4f7bb5ffda8ddabf68d4',
        limit: 12,
        resolution: 'standard_resolution',
		 accessToken: '5452392704.c020aaa.a8284c2fa0c64499bf69ee69d91dd7bd',
        sortBy: 'most-recent',
        template: '<a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a>',
    });


    userFeed.run();

});