/*Desarrollador: Desarrollador: Carlos Villafuerte, Esteban Blanco, Lady Chacon, Roberto Salazar.
    Version: 1.0
    Module AngularJS: HotelLaPredera
    Año: 2016
    Descripción: route, para la navegación de las paginas en AngularJS.
*/
angular.module('HotelLaPredera')
.controller("loginCtrl", function($scope,$http,$location,loginFactory)
{
    console.log("Prueba de carga de loginCtrl");
    loginFactory.getData("Sergio",function(res){
        console.log(res);
    });

});