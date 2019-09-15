<?php

namespace safira\view;



include_once($_SERVER['DOCUMENT_ROOT'].'/safira/controller/InitialController.php');



use safira\InitialController;

?>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/safira/view/include/header.php'); ?>





<!-- <div class="safira">

    <div class="safira-olhos safira-olho-direito"></div>

    <div class="safira-olhos safira-olho-esquerdo"></div>

    <div class="safira-boca"></div>

    <div class="safira-boca1"></div>

</div> -->

<?php

    $initialController = new InitialController();



    $initialController->teste();





    //print_r(locale_get_default()); "lat":"-20.8138831","log":"-49.3810963" "lat":"-20.8138899","log":"-49.38112"

?>

<div id="map" ></div>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/safira/view/include/footer.php'); ?>



<script>

  $(document).ready(function() {

    Swal.fire({

      title: 'Olá',

      text: 'Sejá Bem Vindo',

      type: 'info',

      confirmButtonText: 'Ok'

    });



  });



  var map;

  function initMap() {



    $.getJSON("http://ip-api.com/json", function (data, status) 

    {

        if(status === "success") 

        {

            console.log(data);

            map = new google.maps.Map(document.getElementById('map'), {

              center: {lat: data.lat, lng: data.lon},

              zoom: 12

            });



            var iconBus = {

                url: "../img/iconbus.png", // url

                scaledSize: new google.maps.Size(35, 35), // size

            }



            new google.maps.Marker({

                position: new google.maps.LatLng($('#latitude').val(), $('#longitude').val()),

                title: "Meu ponto personalizado! :-D",

                map: map,

                icon: iconBus

            });



            var iconPonto = {

                url: "../img/busstop.png", // url

                scaledSize: new google.maps.Size(40, 40), // size

            }



            new google.maps.Marker({

                position: new google.maps.LatLng(-20.8138899,-49.39112),

                title: "Meu ponto personalizado! :-D",

                map: map,

                icon: iconPonto

            });



            



            new google.maps.Marker({

                position: new google.maps.LatLng(-21.2265, -47.8238),

                title: "Meu ponto personalizado! :-D",

                map: map,

                icon: iconPonto

            });

        }

    });

  }

</script>

<script async defer

  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd0KWp5TBxh0_x1OK9Do56MpHfS46m3Q8&callback=initMap">

</script>

