var authControllers   = angular.module('authControllers', []),
    pedidoControllers = angular.module('pedidoControllers', ['ngCordova']),
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

pedidoControllers.controller('PedidosRegistrarCtrl', ['$scope', 'restApi', '$cordovaCamera', 'auth',  '$location', '$routeParams',
  function ($scope, restApi, $cordovaCamera, auth, $location, $routeParams) {
      
    $scope.incidencia = {
        id_pedido:'',
        num_incidencia:'',
        descripcion: '',
        fecha: '',
        imagen: '',
    }; 
      
    $scope.pictureUrl = "http://placehold.it/300x300"; 
    
    $scope.takePicture = function(){
        var options = {
            destinationType: Camera.DestinationType.DATA_URL,
            encodingType: Camera.EncodingType.JPEG
        }
        
        $cordovaCamera.getPicture(options)
        .then(function(data){
           console.log('camera data: ' + angular.toJson(data));
           $scope.pictureUrl = 'data:image/jpeg;base64,' + data;
        }, function(error){
            console.log('camera error: ' + angular.toJson(data));
        
        });
    };
    
      
    $scope.registraIncidencia = function () {
        
   
        $scope.incidencia.descripcion = $scope.descripcion;
        $scope.incidencia.fecha = $scope.fecha;
        $scope.incidencia.num_incidencia = $scope.num_incidencia;
        $scope.incidencia.id_pedido = $routeParams.id;
        $scope.incidencia.imagen = $scope.pictureUrl;
        console.log($scope.incidencia);
        
        restApi.call({
                method: 'post',
                url: 'incidencia/registrar',
                data: $scope.incidencia,
                response: function (r) {
                    if(r.response){
                        $location.path('/pedidos');
                    }
                },
                error: function (r) {

                },
                validationError: function (r) {
                    console.log(r);
                }
            });
       
    };
      
    
      
  }]);

pedidoControllers.controller('PedidosVisualizarCtrl', ['$scope', 'restApi', '$location', '$routeParams',
  function ($scope, restApi, $location, $routeParams ) {
      
      
      inicializar();
      
      function inicializar(){
          estados();
      }
      
       function estados() {
            restApi.call({
                method: 'get',
                url: 'pedidos/estados',
                response: function (r) {
                    $scope.estados = r;
                    obtenerPedido();
                },
                error: function (r) {

                },
                validationError: function (r) {
                    console.log(r);
                }
            });
        }
      
      function obtenerPedido() {
            restApi.call({
                method: 'get',
                url: 'pedidos/obtener/' + $routeParams.id,
                response: function (r) {
                    $scope.pedido = r;
                    $scope.Estado = r.estado_id;
                    obtenerIncidencia();
                },
                error: function (r) {

                },
                validationError: function (r) {
                    console.log(r);
                }
            });
        }
      
      function obtenerIncidencia() {
            restApi.call({
                method: 'get',
                url: 'incidencia/listarPorPedido/' + $routeParams.id,
                response: function (r) {
                    $scope.model = r;
                },
                error: function (r) {

                },
                validationError: function (r) {
                    console.log(r);
                }
            });
        }
      
      $scope.actualizaEstado = function(){
         restApi.call({
                method: 'put',
                url: 'pedidos/estados/' + $scope.pedido.id,
                data: {
                    estado_id: $scope.Estado
                },
                response: function (r) {
                    if(r.response){
                        $location.path('pedidos');
                    }
                },
                error: function (r) {

                },
                validationError: function (r) {
                    console.log(r);
                }
            });
      }
      
      
      
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