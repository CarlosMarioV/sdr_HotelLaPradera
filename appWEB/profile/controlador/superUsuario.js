/*Desarrollador: Desarrollador: Carlos Villafuerte, Esteban Blanco, Lady Chacon, Roberto Salazar.
    Version: 1.0
    Module AngularJS: HotelLaPredera
    Año: 2016
    Descripción: route, para la navegación de las paginas en AngularJS.
*/
    /* global angular */

var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var fechaActual = new Date();
angular.module('HotelLaPradera')
.controller("superUsuarioCtrl", function($scope,$location,AuthenticationService,notificaciones)
{
    (function actualizarFecha(){
        $scope.fechaActual = diasSemana[fechaActual.getDay()] + ", " + fechaActual.getDate() + " de " + 
            meses[fechaActual.getMonth()] + " del " + fechaActual.getFullYear();
            console.log(fechaActual);

        
    })();  
    $scope.Logout = function Logout(){
        notificaciones.notifySuccess('Cerrando Sesión');
        AuthenticationService.Logout();
         $location.path("/"); 
    };
    
    $scope.visibleNav = false;
    $scope.superUsuario = "Hola";
});

 

