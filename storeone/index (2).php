<!DOCTYPE html>
<html>
    <head>
        <title>One League</title>
        <link rel="icon" type="image/png" sizes="32x32" href="image/favicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/bootbox.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/custom-styles.css">

    </head>
    <body>
        <div ng-app="myApp" ng-controller="myCtrl" ng-cloak>
            <div class="container">
                <div class="row header-container">
                    <div class="col-sm-3 col-xs-4">
                        <img class="logo" src="image/logos/one-league.png" title="One League" alt="One League">
                    </div>
                    <div class="col-sm-9 col-xs-8">
                        <p class="heading">MANY BRANDS. ONE LEAGUE.</p>
                    </div>                              
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <hr class="dark-line" />
                        <!--<div class="down-arrow hidden-sm">
                            <img src="image/down-arrow.png" alt="" class="tossing" id="test" />
                        </div>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="content-heading">Choose a brand find a store near you.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 logo-content">
                        <div class="row">
                            <div class="col-sm-4">
                                <a ng-click="brand_click('INDIGO NATION')"><img src="image/logos/Indigonation.svg" class="select-logo" ng-class="selected_brand == 'INDIGO NATION' ? 'selected-logo' : ''" /> <span ng-class="selected_brand == 'INDIGO NATION' ? 'selected-text' : 'hide-text'">+</span></a>                 
                            </div>

                            <div class="col-sm-4">
                                <a ng-click="brand_click('CONVERSE')"><img src="image/logos/Converse.svg" class="select-logo" ng-class="selected_brand == 'CONVERSE' ? 'selected-logo' : ''"/><span ng-class="selected_brand == 'CONVERSE' ? 'selected-text' : 'hide-text'">+</span></a>
                            </div>
                            <div class="col-sm-4">
                                <a ng-click="brand_click('SCULLERS')"><img src="image/logos/scullers.svg" class="select-logo" ng-class="selected_brand == 'SCULLERS' ? 'selected-logo' : ''"/><span ng-class="selected_brand == 'SCULLERS' ? 'selected-text' : 'hide-text'">+</span></a>
                            </div>                                        
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <a ng-click="brand_click('URBANA')"><img src="image/logos/urbana.svg" class="select-logo" ng-class="selected_brand == 'URBANA' ? 'selected-logo' : ''"/><span ng-class="selected_brand == 'URBANA' ? 'selected-text' : 'hide-text'">+</span></a>
                            </div>
                            <div class="col-sm-4">
                                <a ng-click="brand_click('MOTHER EARTH')"><img src="image/logos/mother-earth.svg" class="select-logo" ng-class="selected_brand == 'MOTHER EARTH' ? 'selected-logo' : ''"/><span ng-class="selected_brand == 'MOTHER EARTH' ? 'selected-text' : 'hide-text'">+</span></a>
                            </div>
                            <div class="col-sm-4">
                                <a ng-click="brand_click('GIOVANI')"><img src="image/logos/Giovani.svg" class="select-logo" ng-class="selected_brand == 'GIOVANI' ? 'selected-logo' : ''"/><span ng-class="selected_brand == 'GIOVANI' ? 'selected-text' : 'hide-text'">+</span></a>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <a ng-click="brand_click('URBAN YOGA')"><img src="image/logos/urban-yoga.svg" class="select-logo" ng-class="selected_brand == 'URBAN YOGA' ? 'selected-logo' : ''"/><span ng-class="selected_brand == 'URBAN YOGA' ? 'selected-text' : 'hide-text'">+</span></a>
                            </div>
                            <div class="col-sm-4">
                                <a ng-click="brand_click('JEALOUS 21')"><img src="image/logos/jealous-21.svg" class="select-logo" ng-class="selected_brand == 'JEALOUS 21' ? 'selected-logo' : ''"/><span ng-class="selected_brand == 'JEALOUS 21' ? 'selected-text' : 'hide-text'">+</span></a>
                            </div>
                            <div class="col-sm-4">
                                <a ng-click="brand_click('JOHN MILLER')"><img src="image/logos/john-miller.svg" class="select-logo" ng-class="selected_brand == 'JOHN MILLER' ? 'selected-logo' : ''"/><span ng-class="selected_brand == 'JOHN MILLER' ? 'selected-text' : 'hide-text'">+</span></a>
                            </div>                    
                        </div>                  
                    </div>
                    <div class="col-sm-6 right-side-content">
                        <div class="row">
                            <div class="col-sm-12 selected-brand-text">
                                {{selected_brand}}
                            </div>
                        </div>
                        <div class="row place">
                            <div class="col-sm-6">
                                <select id="state_content" ng-change="onchange_state()" class="form-control" name="drp_state" ng-options="data.store_state for data in state_data | orderBy:'store_state'" ng-model="drp_state" ng-click="state_click()">
                                    <option value="">Choose a State</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select ng-change="onchange_city()" class="form-control" name="drp_city" ng-options="data.store_city for data in city_data | orderBy:'store_city'" ng-model="drp_city" ng-click="city_click()" required>
                                    <option value="">Choose a City</option>
                                </select>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>     
                <div class="row">
                    <div class="col-sm-12">
                        <hr class="dark-line" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 content-display-city" ng-show="store_details_data.length > 0">
                        {{selected_brand}} Stores in {{drp_city.store_city}}
                    </div>
                </div>
                <div class="col-sm-12" id="map" ng-show="store_details_data.length > 0"></div>
                <div class="row" ng-show="store_details_data.length > 0"> 
                    <div class="col-sm-12">
                        <hr class="dark-line" />
                    </div>
                </div>
               
                <div class="scroll_store_details" id="scrollToDetailsContent">
                    <div ng-repeat="data in store_details_data ">
                        <div class="clearfix" ng-if="$index % 2 == 0"></div>
                        <div class="col-sm-6">
                            <div class="brand-content">
                                <div class="brand-heading row">
                                    <div class="col-sm-2 col-xs-2">
                                        <label>Brand  </label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8">
                                        <!-- {{data.brand_list}} -->
                                        {{selected_brand}}
                                    </div>  
                                    <div class="col-sm-2 col-xs-2">
                             <b style="float:right;"><img class="locationimg" ng-model="locationimg"  ng-click="mapsSelector(data.location)"  src="image/location_pin.png" title="One League" alt="One League"></b>
                             </div>
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-sm-2 col-xs-2">
                                        <label>Address  </label>
                                    </div>
                                    <div class="col-sm-10 col-xs-10 store-address">
                                        {{data.store_address}}
                                    </div>
                                </div>                        
                                <div class="row">
                                    <div class="col-sm-2 col-xs-2">
                                        <label>Phone  </label>
                                    </div>
                                    <div class="col-sm-10 col-xs-10">
                                        {{data.land_line}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2 col-xs-2">
                                        <label>Email  </label>
                                    </div>
                                    <div class="col-sm-10 col-xs-10">
                                        {{data.email}}
                                    </div>
                                </div>  
                            </div>                  
                        </div>
                    </div>            
                </div>        

            </div>
        </div>
        <a id="bottom" name="bottom"></a>
        <div class="footer-content">Copyrights 2017. All Rights Reserved.</div>
        <script>

            var app = angular.module('myApp', []);
            app.controller('myCtrl', function ($scope, $http) {
                // $scope.isMacDevice = 0;
                $scope.state_data = [];
                $scope.city_data = [];
                $scope.store_details_data = [];
                $scope.selected_brand = '';
                $scope.store_details_data_dump = [];


                // var userAgent = navigator.userAgent || navigator.vendor || window.opera;

                // if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                //      $scope.isMacDevice = 100;
                // }



                $scope.brand_click = function (brandName) {
                    $scope.selected_brand = brandName;
                    get_state($scope, $http, brandName);
                    if (screen.width < 768) {
                        scroll_to_element('state_content', 10, 1000);
                        // if($scope.isMacDevice == 100){
                        //     $('.logo-content').addClass('hidden');
                        //     $('.content-heading').addClass('hidden');
                        // }
                    }

                }

                 $scope.mapsSelector = function (location) {
                     mapsSelector($scope,location);
                 }

                

                $scope.onchange_state = function () {
                    get_city($scope, $http);
                }

                $scope.onchange_city = function () {
                    get_store_details($scope, $http);
                }

                $scope.state_click = function () {
                    if ($scope.state_data.length == 0) {
                        bootbox.alert('<p class="alert-text">Please select the brand.</p>');
                    }
                }

                $scope.city_click = function () {
                    if ($scope.state_data.length == 0) {
                        bootbox.alert('<p class="alert-text">Please select the brand and state.</p>');
                        return;
                    }
                    if ($scope.city_data.length == 0) {
                        bootbox.alert('<p class="alert-text">Please select the state.</p>');
                    }
                }
                get_json($scope, $http);
            });


            function get_json($scope, $http){
                $http.get('st_json.json').
                  then(function onSuccess(response) {
                    $scope.store_details_data_dump = response.data;
                  }).catch(function onError(response) {
                   console.log(response);
                });
            }


            function get_state($scope, $http, brandName) {
                var tempStateString = '';
                $scope.state_data = [];
                angular.forEach($scope.store_details_data_dump, function (obj, key) {
                    if(obj.brand == brandName) {
                        if(tempStateString.indexOf(obj.state + ',') == -1){
                            $scope.state_data.push({ store_state: obj.state });
                        }
                        tempStateString += obj.state + ',';                         
                    }
                });

                 // console.log($scope.state_data);
                // $http({
                //     url: 'store-function.php',
                //     method: "GET",
                //     params: {type: 1, flt_brand_name: brandName}
                // }).then(function (response) {
                //     $scope.state_data = response.data;
                // });
                $("html, body").animate({scrollTop: $(document).height()}, 1000);

            }

            function get_city($scope, $http) {
                var tempCityString = '';
                $scope.city_data = [];
                if ($scope.drp_state == undefined)
                    return;
                var state_name = $scope.drp_state.store_state;
                angular.forEach($scope.store_details_data_dump, function (obj, key) {
                    if(obj.brand ==  $scope.selected_brand && obj.state == state_name) {
                        if(tempCityString.indexOf(obj.city + ',') == -1){
                            $scope.city_data.push({ store_city: obj.city });
                        }
                         tempCityString += obj.city + ',';
                    }
                });

                // console.log($scope.city_data);


                // $http({
                //     url: 'store-function.php',
                //     method: "GET",
                //     params: {type: 2, flt_brand_name: $scope.selected_brand, flt_state_name: state_name}
                // }).then(function (response) {
                //     $scope.city_data = response.data;
                // });

            }

            function get_store_details($scope, $http) {
                $scope.store_details_data = [];
                var state_name = $scope.drp_state.store_state;
                if ($scope.drp_city == undefined)
                    return;
                var city_name = $scope.drp_city.store_city;
                angular.forEach($scope.store_details_data_dump, function (obj, key) {
                    if(obj.brand ==  $scope.selected_brand && obj.state == state_name && obj.city == city_name) {
                        $scope.store_details_data.push({ 
                            store_address : obj.store_address
                            , land_line : obj.land_line
                            , email : obj.email
                            , location : obj.location
                        });
                    }
                });

                if(map ==undefined){
                    initMap($scope);
                }else{
                    createMapMarkers($scope);
                }
                

                //console.log($scope.store_details_data);

                // $http({
                //     url: 'store-function.php',
                //     method: "GET",
                //     params: {type: 3, flt_brand_name: $scope.selected_brand, flt_state_name: state_name, flt_city_name: city_name}
                // }).then(function (response) {
                //     $scope.store_details_data = response.data;
                //     $.each($scope.store_details_data, function (key, val) {
                //         val.brand_list = val.brand_list.replace(/,/g, " | ");
                //         val.brand_list = val.brand_list.replace($scope.selected_brand, "*" + $scope.selected_brand + "*");
                //     });
                // });
                scroll_to_element('scrollToDetailsContent', 50, 1000);
            }

            function scroll_to_element(id, top_val, time) {
                $('html,body').animate({scrollTop: $("#" + id).offset().top - top_val}, time);
            }



// Map Scripts starts here 

    var map;
    var mapBounds;
    var infowindow;
    var mapMarakers =[];
    function initMap($scope) {
        var location = $scope.store_details_data[0].location.split(',');
        var latlng =new google.maps.LatLng(location[0], location[1]);
        map = new google.maps.Map(document.getElementById('map'), {
            center: latlng,
            zoom: 15
        });
        createMapMarkers($scope); 
    }

    var createMapMarkers = function($scope){

        mapMarakers.forEach(function(m,k) {
            mapMarakers[k].setMap(null);
        });
        mapMarakers = [];
        mapBounds = new google.maps.LatLngBounds();        
        infowindow = new google.maps.InfoWindow();


        $scope.store_details_data.forEach(function(obj,key){
            var location = obj.location.split(',');
            var latlng = new google.maps.LatLng(location[0], location[1]);
            mapBounds.extend(latlng);
            // if($scope.store_details_data.length == 1){
            //     var geocoder =  new google.maps.Geocoder();
            //     geocoder.geocode( { 'address': $scope.drp_city.store_city}, function(results, status) {
            //         if (status == google.maps.GeocoderStatus.OK) {
            //           cityLatLng =  new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng()); 
            //           mapBounds.extend(cityLatLng);
            //         }
            //     });  
            // }else{
            //     mapBounds.extend(latlng);
            // }

            map.setCenter(mapBounds.getCenter()); //or use custom center
            //remove one zoom level to ensure no marker is on the edge.
            // map.setZoom(map.getZoom() - 1);
            // map.setZoom(15);
            
            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });

            google.maps.event.addListener(marker, 'mouseover', (function(marker) {
                return function() {
                infowindow.setContent(obj.store_address + ' Call@ ' + obj.land_line);
                infowindow.open(map, marker);
                }
            })(marker));
            mapMarakers.push(marker);
        });
        map.fitBounds(mapBounds);
        map.panToBounds(mapBounds);
    }


    function mapsSelector($scope,location) {

         var location = location.split(',');
       
   /* if we're on iOS, open in Apple Maps */
    if((navigator.platform.indexOf("iPhone") != -1) || 
     (navigator.platform.indexOf("iPad") != -1) || 
     (navigator.platform.indexOf("iPod") != -1))
     {
window.open("maps://maps.google.com/maps?daddr="+location[0]+"," +location[1] +"&amp;ll=");
     }    
else {
/* else use Google */
     window.open("https://maps.google.com/maps?daddr="+location[0]+"," +location[1] +"&amp;ll=");
}
}


// Map Scripts ends here

        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1bj7RFLLnZfom3Y_P3O-jy42oFRqDuXQ" type="text/javascript"></script>
    </body>
</html>
