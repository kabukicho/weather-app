var LWWS = function () {
}


LWWS.prototype.constructPipeURL = function (baseURL) {
 return ('http://pipes.yahoo.com/pipes/pipe.run' +
   '?u=' + encodeURI(baseURL) +
   '&_id=332d9216d8910ba39e6c2577fd321a6a' +
   '&_render=json' +
   '&_callback=?'
 );
}

LWWS.prototype.getJSON = function (city, callback) {
 var weatherURL = 'http://weather.livedoor.com/forecast/webservice/json/v1?city=' + city;
 $.getJSON(
   this.constructPipeURL(weatherURL),
   {},
   callback
 );
};