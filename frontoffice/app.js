// Inicializando la App
var MODULE = 'front-app', // DEJAR CON EL MISMO NOMBRE
    API = {
        'token_name': 'APP-TOKEN', // EL NOMBRE DEL TOKEN QUE HAN DEFINIDO PARA SU API
        'base_url': 'http://172.26.0.156/appweb/api/public/' // LA URL DE SU API
    };

var frontApp = angular.module(MODULE, [
    'ngRoute',
    'authControllers',
    'pedidoControllers',
    'testControllers'
]);

(function(){
    if(typeof(localStorage[API.token_name]) === 'undefined'){
        localStorage[API.token_name] = '';
    }
}());