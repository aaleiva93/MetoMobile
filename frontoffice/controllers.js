var authControllers   = angular.module('authControllers', []),
    pedidoControllers = angular.module('pedidoControllers', [])
    testControllers   = angular.module('testControllers', []);

// Auth Controller
authControllers.controller('AuthLoginCtrl', ['$scope', 'restApi', '$location', 'auth',
  function ($scope, restApi, $location, auth) {
      $scope.ingresar = function(){
          restApi.call({
              method: 'post',
              url: 'auth/autenticar',
              data: {
                  correo: $scope.correo,
                  password: $scope.password
              },
              response: function(r){
                  if(r.response){
                      auth.setToken(r.result);
                      $location.path('/pedidos');
                  } else {
                      alert(r.message);
                  }
              },
              error: function(r){

              },
              validationError: function(r){

              }
          });
      }
  }]);

authControllers.controller('AuthLogoutCtrl', ['$scope', '$http', '$location', 'auth',
  function ($scope, $http, $location, auth) {
      auth.logout();
  }]);

// Pedido Controller
pedidoControllers.controller('PedidosListadoCtrl', ['$scope', 'restApi', 'auth',
  function ($scope, restApi, auth) {
        auth.redirectIfNotExists();

        var user = auth.getUserData();

        $scope.usuario = user.Nombre;

        cargarPedidos();

        function cargarPedidos() {
            restApi.call({
                method: 'get',
                url: 'pedidos/listarPorConductor/' + user.id,
                response: function (r) {
                    $scope.model = r;
                },
                error: function (r) {

                },
                validationError: function (r) {

                }
            });
        }
  }]);

pedidoControllers.controller('PedidosRegistrarCtrl', ['$scope', '$http',
  function ($scope, $http) {
      
  }]);

pedidoControllers.controller('PedidosVisualizarCtrl', ['$scope', '$http',
  function ($scope, $http) {
      
  }]);

// Test controller
testControllers.controller('TestCtrl', ['$scope', 'restApi', 'auth',
  function ($scope, restApi, auth) {
      
      validaEntidad();
      
      function validaEntidad(){
          restApi.call({
              method: 'post',
              url: 'test/valida',
              response: function(r){

              },
              error: function(r){
                  
              },
              validationError: function(r){
                  console.log(r);
              }
          });
      }
      
      function autentica(){
          restApi.call({
              method: 'get',
              url: 'test/auth',
              response: function(r){
                  auth.setToken(r);
                  console.log(auth.getUserData());
                  validaAunteticacion();
              },
              error: function(r){

              },
              validationError: function(r){

              }
          });
      }
      
      function validaAunteticacion(){
          restApi.call({
              method: 'get',
              url: 'test/auth/validate',
              response: function(r){
                  console.log(r);
              },
              error: function(r){

              },
              validationError: function(r){

              }
          });
      }
  }]);