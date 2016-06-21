// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'

// Inicializando la App
var MODULE = 'front-app', // DEJAR CON EL MISMO NOMBRE
    API = {
        'token_name': 'APP-TOKEN', // EL NOMBRE DEL TOKEN QUE HAN DEFINIDO PARA SU API
        'base_url': 'http://localhost/appweb/api/public/' // LA URL DE SU API
    };

var frontApp = angular.module(MODULE, [
    'ngRoute',
    'authControllers',
    'pedidoControllers',
    'testControllers',
]);

(function(){
    if(typeof(localStorage[API.token_name]) === 'undefined'){
        localStorage[API.token_name] = '';
    }
}());

