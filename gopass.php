<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styleGoPass.css">


    <!-- Scroll -->
    <script src="js/smooth-scroll.min.js"></script>
    <script>
        smoothScroll.init({
            selector: '[data-scroll]',
            selectorHeader: null,
            speed: 2000,
            easing: 'easeInOutCubic',
            offset: 0,
            callback: function (anchor, toggle) {}
        });
    </script>

    <!-- Iconos -->
    <link rel="stylesheet" href="js/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>¿Que es GoPass?</title>
</head>

<body>
    <header>
        <div class="container-header">
            <a href="index.html" class="container-header-logo-gopass"> <img src="assets/img/header-logo-gopass2.png"
                    alt="logo GoPass"></a>
            <div class="burguer-button" id="burguer-button">
                <i class="fas fa-bars  fa-2x"></i>
            </div>
            <!-- <div class="container-header-button-login">
                <a href="">iniciar sesión</a>
            </div> -->
        </div>
        <nav class="menu" id="menu">
            <ul>
                <li>
                    <a href="gopass.php">¿qué es gopass?</a>
                </li>
                <li>
                    <div class="subMenu_Responsive">
                        <li><a href="gasolina.html">Gasolina</a></li>
                        <li><a href="peajes.html">Peajes</a></li>
                        <li><a href="parqueaderos.html">Parqueaderos</a></li>
                        <li><a href="soat.html">SOAT</a></li>
                        <li><a href="lavafante.html">Lavafante</a></li>
                        <li><a href="parking.html">Parking</a></li>
                    </div>
                </li>
                <li>
                    <a href="faq.html">preguntas frecuentes</a>
                </li>
                <li>
                    <a href="addtag.html">adquiere tu tag</a>
                </li>
            </ul>
        </nav>
        <div class="container-header-nav">
            <nav class="nav-header">
                <ul>
                    <li>
                        <a href="gopass.php">¿qué es gopass?</a>
                        <ul class="subMenu">
                            <li><a data-scroll href="#infogopass">¿Qué es GoPass?</a></li>
                            <li><a data-scroll href="#functiongopass">¿Cómo Funciona?</a></li>
                            <li><a data-scroll href="#installgopass">¿Cómo instalar tu tag?</a></li>
                            <li><a data-scroll href="#ScrollMap">¿Dónde  encontrarnos?</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="linkServicios" href="#">nuestros servicios</a>
                        <ul class="subMenu">
                            <li><a href="gasolina.html">Gasolina</a></li>
                            <li><a href="peajes.html">Peajes</a></li>
                            <li><a href="parqueaderos.html">Parqueaderos</a></li>
                            <li><a href="soat.html">SOAT</a></li>
                            <li><a href="lavafante.html">Lavafante</a></li>
                            <li><a href="parking.html">Parking</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="faq.html">preguntas frecuentes</a>
                    </li>
                    <li>
                        <a href="addtag.html">adquiere tu tag</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="infogopass" id="infogopass">
        <div class="container-infogopass">
            <div class="container-infogopass-title">
                <p>
                    ¿qué es gopass?
                </p>
            </div>
            <div class="container-infogopass-description">
                <p>
                    Somos un ecosistema de servicios diseñados especialmente para mejorar tu movilidad. Con GoPass ahora
                    será más fácil pagar el parqueadero de centros comerciales, ya no será necesario el molesto papelito
                    que tenías que guardar para pagar y salir, ahora con tu tag GoPass entras y sales por las entradas
                    exclusivas sin nungun problema, paga los peajes, paga el combustible de tu vehículo y actualiza tu
                    SOAT. <br>
                </p>
                <strong>¡Todo con un solo TAG!</strong>
            </div>
        </div>
    </section>

    <section class="functiongopass" id="functiongopass">
        <div class="gopass-functiongopass-img-responsive">
            <img src="assets/img/responsive/gopass-functiongopass-img-responsive.png" alt="Tag-GoPass">
        </div>
        <div class="functiongopass-img">
            <!-- <img src="assets/img/gopass-functiongopass-img.png" alt="Tag-GoPass"> -->
        </div>
        <div class="container-functiongopass-text">
            <div class="container-functiongopass-title">
                <p>¿cómo funciona?</p>
            </div>
            <div class="container-functiongopass-description">
                <p>Por medio de un tag electrónico que estará ubicado en el parabrisas de tu carro el cual deberás
                    activar por medio de la App en tú teléfono, podrás empezar a disfrutar del ecosistema de GoPass.
                    Paga los peajes, el combustible de tu vehículo, los parqueaderos en los centros comerciales y
                    renovar tu SOAT, todo con un soló toque a tu teléfono.</p>
            </div>
            <!-- <div class="container-functiongopass-img">
                <a href="addtag.html"><img src="assets/img/gopass-functiongopass-container-text-img.png" alt="adquiere-tu-tag"></a>
            </div> -->
        </div>
        
    </section>

    <div class="container-functiongopass-img">
        <a href="addtag.html"><img src="assets/img/gopass-functiongopass-container-text-img (2).png" alt="adquiere-tu-tag"></a>
    </div>

    <section class="installgopass" id="installgopass">
        <div class="container-installgopass-title">
            <p>¿cómo instalar tu tag?</p>
        </div>
        <div class="container-installgopass">
            <div class="container-installgopass-items">
                <div class="container-img-installGopass">
                    <img class="container-installgopass-items-img1" src="assets/img/container-installgopass-items1.png" alt="">
                </div>
                <div class="container-installgopass-items-description">
                    <p>Descarga la APP GOPASS en tu teléfono y completa todos los datos de inscripción y medio de pago.
                    </p>
                </div>
            </div>
            <div class="container-installgopass-items">
                <div class="container-img-installGopass">
                    <img class="container-installgopass-items-img2" src="assets/img/container-installgopass-items2.png" alt="">
                </div>
                
                <div class="container-installgopass-items-description">
                    <p>Limpia la superficie del parabrisas y después ubica el TAG a un costado del espejo retrovisor.
                    </p>
                </div>
            </div>
            <div class="container-installgopass-items">

                <div class="container-img-installGopass">
                    <img class="container-installgopass-items-img3" src="assets/img/container-installgopass-items3.png" alt="">
                </div>
                
                <div class="container-installgopass-items-description">
                    <p>Por último registra el TAG con el código QR a través de tu teléfono. Después de 24 horas quedará activo
                        tu TAG.</p>
                </div>
            </div>
        </div>
        <div class="container-installgopass-info">
            <p>*Los costos del ecosistema completo de GoPass tienen un valor de $9.000+IVA al mes. Si quieres usar
                GoPass solo para pagar peajes, no habrá costo de membresía, el Tag GoPass tiene un precio de
                $20.000+IVA. Hacer parte de la comunidad GoPass no solo te brindará la comodidad de los pagos
                automáticos sino que tambien accederás a promociones y descuentos exclusivos que GoPass tiene preparados para
                ti.</p>
        </div>
    </section>

    <section class="mapgopass" id="ScrollMap">
        <div class="container-map-title">
            <p>
                ¿dónde encontrarnos?
            </p>
        </div>
        <div class="container-map">
            <div class="map" id="maps"></div>
            <div class="container-map-img">
                <div class="container-map-img-marquer">
                    <img src="assets/img/gopass-marquer-parqueadero.png" alt="Marquer-parqueadero">
                </div>
                <div class="container-map-img-marquer">
                    <img src="assets/img/gopass-marquer-peajes.png" alt="Marquer-peajes">
                </div>
                <div class="container-map-img-marquer">
                    <img src="assets/img/gopass-marquer-gasolina.png" alt="Marquer-gasolina">
                </div>
            </div>
            <div class="container-icons-mapa-responsive">
                <div class="container-icons-mapa-responsive-box">
                  <div class="container-icons-mapa-responsive-box-img">
                    <img src="assets/img/marker-parqueadero-map.png" alt="">
                  </div>
                  <div class="container-icons-mapa-responsive-box-title"> 
                    <p>parqueaderos</p>
                  </div>
                </div>
                <div class="container-icons-mapa-responsive-box">
                  <div class="container-icons-mapa-responsive-box-img">
                    <img src="assets/img/marker-peaje-map.png" alt="">
                  </div>
                  <div class="container-icons-mapa-responsive-box-title">
                    <p>
                      peajes
                    </p>
                  </div>
                </div>
                <div class="container-icons-mapa-responsive-box">
                  <div class="container-icons-mapa-responsive-box-img">
                    <img src="assets/img/marker-gasolina-map.png" alt="">
                  </div>
                  <div class="container-icons-mapa-responsive-box-title">
                    <p>
                      estaciones de servicio
                    </p>
                  </div> 
                </div>
              </div>
        </div>    
    </section>

    <section class="link">
        <div class="container-link">
            <a href="https://terminos.gopass.com.co" target="_blank">Términos y condiciones</a>
        </div>
<!-- 
        <div class="container-seccion-gopass-imagen-paypal">
            <img class="img-big" src="assets/img/items-image.png" alt="Medios-de-pago">
        </div> -->

        <!-- <div class="container-seccion-gopass-imagen-paypal">
            <img class="img-big" src="assets/img/gasolina-paypal-imagen.png" alt="Medios-de-pago">
        </div> -->
    </section>

    
    <footer>
        <div class="footer-container">
            <div class="footer-container-contact-image">
                <img src="assets/img/footer-image.png" alt="">
            </div>
            <div class="footer-container-contact-form">
                <p>
                    contáctanos:
                </p>
                <form action="">
                    <div class="footer-container-contact-form-input">
                        <input class="Inputemail" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="footer-container-contact-form-textarea">
                        <textarea name="mensaje" placeholder="Mensaje" id="" cols="10" rows="1"></textarea>
                    </div>

                    <div class="check">
                        <label class="container-checkbox">He leído, comprendo y acepto la política de privacidad y de
                            tratamiento de datos que
                            se encuentra en el documento de <a href="https://terminos.gopass.com.co"
                                target="_blank">términos y condiciones</a>.
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <a class="buttonSend" type="submit" href="#"><img src="assets/img/footer-buttom-send.png" alt=""></a>
<!-- 
                    <button type="submit">
                        <img src="assets/img/footer-buttom-send.png" alt="">
                    </button> -->
                </form>
            </div>
            <div class="footer-container-info">
                <div class="footer-container-info-box">
                    <div class="footer-container-info-box-image">
                        <img src="assets/img/footer-contact-phone.png" alt="">
                    </div>
                    <div class="footer-container-info-box-data">
                        <p>Líneas de atención al cliente</p>
                        <p>(+571) 432 2230</p>
                    </div>
                </div>
                <div class="footer-container-info-box">
                    <div class="footer-container-info-box-image">
                        <img src="assets/img/footer-contact-adress.png" alt="">
                    </div>
                    <div class="footer-container-info-box-data">
                        <p>Carrera 56# 9-09, Of 504</p>
                        <p>Bogotá, Colombia</p>
                    </div>
                </div>
                <div class="footer-container-info-box">
                    <div class="footer-container-info-box-image">
                        <img src="assets/img/footer-contact-email.png" alt="">
                    </div>
                    <div class="footer-container-info-box-data">
                        <p>Info@GoPass.com.co</p>
                    </div>
                </div>
                <div class="footer-container-info-icons">
                    <a href=""><span class="icons fab fa-facebook fa-3x fa-sm"></span></a>
                    <a href=""><span class="icons fab fa-instagram fa-3x fa-sm"></span></a>
                    <a href=""><span class="icons fab fa-youtube fa-3x fa-sm"></span></a>
                    <a href=""><span class="icons fab fa-google-play fa-3x fa-sm"></span></a>
                    <a href=""><span class="icons fab fa-apple fa-3x fa-sm"></span></a>
                </div>
            </div>
        </div>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- <script type="text/javascript">
	    $.ajax({
	      url: "markes.php", 
          dataType: 'json'
	    })
	    .done(function(data) {
	        console.log(data["data"].length);
            $.each(data["data"], function( key, value) {
                console.log(value['nombre']);
            }); 
	    })
	    .fail(function(data) {
            console.log('Hola y chaoooosssss');
	      console.log(data);
	    })
	    .always(function(data) {
	      console.log(data);
	    });
    </script> -->
    
    <script>
        const menu = document.querySelector('.menu');
        const burguerBtn = document.querySelector('#burguer-button');

        const btnServices = document.querySelector('#services');
        burguerBtn.addEventListener('click', showMenu);

        function showMenu() {
            console.log(btnServices);
        }
        burguerBtn.addEventListener('click', showHide);
        function showHide() {
            menu.classList.toggle('is-active')
        }
    </script>


    <script>
        var map;
        var contentString
        var nombrePunto;
        var direccion;
        var latitud;
        var longitud;
        var urlumg;
        var servicio;
        var tarifa;
        var horario;
        
            function initMap() {
            var Novus = {lat: 4.628540, lng: -74.111953};
            map = new google.maps.Map(document.getElementById('maps'), {
                center: {lat: 4.6097102, lng: -74.081749},
                zoom: 11, 
            });

           

            var icons = {
                Gasolina :{
                     icon: 'assets/img/marker-gasolina-map.png',
                 },
                 Parqueaderos :{
                     icon: 'assets/img/marker-parqueadero-map.png'
                 },
                 Peajes :{
                     icon: 'assets/img/marker-peaje-map.png'
                 },
                 Lavafante :{
                     icon: 'assets/img/marker-peaje-map.png'
                 },
                 SOAT :{
                     icon: 'assets/img/marker-peaje-map.png'
                 },
            };

            //  var lugares = [
            //     {
            //         position: new google.maps.LatLng(4.819509, -74.034672),
            //         type: 'gasolina'
            //     },
            //     {
            //         position: new google.maps.LatLng(4.830347, -74.033032),
            //         type: 'peaje'
            //     },
            //     {
            //         position: new google.maps.LatLng(4.780530, -74.184912),
            //         type: 'peaje'
            //     },
            //     {
            //         position: new google.maps.LatLng(4.835824, -74.028909),
            //         type: 'peaje'
            //     }, 
            //     {
            //         position: new google.maps.LatLng(4.614651, -74.070867),
            //         type: 'parqueadero'
            //     },
                
            //  ]

             $.ajax({
            url: "markes.php", 
            dataType: 'json'
            })
            .done(function(data) {
                console.log(data["data"].length);
                $.each(data["data"], function( key, value) {
                    nombre = (value['nombre']);
                    direccion = (value['direccion']);
                    latitud = (value['latitud']);
                    longitud = (value['longitud']);
                    urlumg = (value['image']);
                    servicio = (value['servicio']);
                    tarifa = (value['tarifa']);
                    horario = (value['horario']);

                    console.log(nombre);
                    console.log(direccion);
                    console.log(latitud);
                    console.log(longitud);
                    console.log(urlumg);
                    console.log(servicio);
                    console.log(tarifa);
                    console.log(horario);
                    console.log('***********');

                    var contentString = '<div class="container-info-map">'+
                        '<h1>'+nombre+'</h1>'+
                        '<div class="container-info-map-box">'+
                        '<div class="container-info-map-img">'+
                        '<img src="'+ urlumg +'" alt="">' +
                        '</div>' +
                        '<div class="container-info-map-text">' +
                        '<p>' +
                        '<span class="icons fa fa-location-arrow fa-1x fa-sm"></span>'+ direccion +'<br>' +
                        '<span class="icons fa fa-car fa-1x fa-sm"></span>'+ servicio +'<br>' +
                        '<span class="icons fa fa-usd fa-1x fa-sm"></span>'+ tarifa +'<br>' +
                        '<span class="icons fa fa-clock-o fa-1x fa-sm"></span>'+ horario +'<br>' +
                        '</p>'+
                        '</div>'+
                        '</div>'+  
                        '</div>';    

                    var marker = new  google.maps.Marker({
                    position: new google.maps.LatLng(latitud, longitud),
                    icon: icons[value['servicio']].icon,
                    map: map, 
                    size: new google.maps.Size(49, 40),
                    animation: google.maps.Animation.DROP,     
                    });

                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
                    

                }); 
            })
            .fail(function(data) {
                console.log('Hola y chaoooosssss');
            console.log(data);
            })
            .always(function(data) {
            console.log(data);
            });

            // for(var i = 0; i < lugares.length; i++){
            //     var marker = new  google.maps.Marker({
            //         position: lugares[i].position,
            //         icon: icons[lugares[i].type].icon,
            //         map: map, 
            //         size: new google.maps.Size(49, 40),
            //         animation: google.maps.Animation.DROP,
            //     });
            // };           
        }
    </script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3kmjj06uTG_BjeHe1ODbAIYODm7OQoL0&callback=initMap" async defer></script>
   


</body>

</html>