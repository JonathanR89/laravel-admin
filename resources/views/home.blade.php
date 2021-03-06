<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ LAConfigs::getByKey('site_description') }}">
    <meta name="author" content="Dwij IT Solutions">

    <meta property="og:title" content="{{ LAConfigs::getByKey('sitename') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{{ LAConfigs::getByKey('site_description') }}" />
    
    <meta property="og:url" content="http://laraadmin.com/" />
    <meta property="og:sitename" content="laraAdmin" />
	<meta property="og:image" content="http://demo.adminlte.acacha.org/img/LaraAdmin-600x600.jpg" />
    
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@laraadmin" />
    <meta name="twitter:creator" content="@laraadmin" />
    
    <title>{{ LAConfigs::getByKey('sitename') }}</title>
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/la-assets/css/bootstrap.css') }}" rel="stylesheet">

	<link href="{{ asset('la-assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('/la-assets/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/la-assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/la-assets/js/smoothscroll.js') }}"></script>

 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdodiLO598_RD8_NYXK7nBKNA9Fhx_uBQ&libraries=places,geometry&.js"></script>

    <script

              src="https://code.jquery.com/jquery-3.1.1.js"

              integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="

              crossorigin="anonymous"></script>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>{{ LAConfigs::getByKey('sitename') }}</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                @else
                    <li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1> <b><a>foodtrees.org</a></b></h1>
                <h3>Find an abundance of fruit trees near you</h3>
                <h3><a href="{{ url('/login') }}" class="btn btn-lg btn-success">Get Started!</a></h3><br>
            </div>
            <div class="col-lg-2">
                <h5>Find your location</h5>
                <p>And Nurseries Near you</p>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/la-assets/img/arrow1.png') }}">
            </div>
            <div class="col-lg-8">
                <input id="findMe" type="button" value="find closest place">

<div id="map-canvas" style="height:500px;"></div>
            </div>
            <div class="col-lg-2">
                <br>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/la-assets/img/arrow2.png') }}">
                <h5>Completely Packaged...</h5>
                <p>for Future expantion of Modules</p>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->


<section id="about" name="about"></section>
<!-- INTRO WRAP -->
<div id="intro">
    <div class="container">
        <div class="row centered">
            <h1>An Architecture designed To Excel</h1>
            <br>
            <br>
            <div class="col-lg-4">
                <i class="fa fa-cubes" style="font-size:100px;height:110px;"></i>
                <h3>Modular</h3>
                <p>Making Data Management fast and enjoyable.</p>
            </div>
            <div class="col-lg-4">
                <i class="fa fa-paper-plane" style="font-size:100px;height:110px;"></i>
                <h3>Easy to Install</h3>
                <p>With single installation command.</p>
            </div>
            <div class="col-lg-4">
                <i class="fa fa-cubes" style="font-size:100px;height:110px;"></i>
                <h3>Customizable</h3>
                <p>Easy to Manipulation the flows.</p>
            </div>
        </div>
        <br>
        <hr>
    </div> <!--/ .container -->
</div><!--/ #introwrap -->

<!-- FEATURES WRAP -->
<div id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 centered">
                <img class="centered" src="{{ asset('/la-assets/img/mobile.png') }}" alt="">
            </div>

            <div class="col-lg-7">
				<h3 class="feature-title">What is foodtrees.org ?</h3><br>
				<ol class="features">
					<li><strong>CMS</strong> (Content Management System) &#8211; Manages Modules &amp; their Data</li>
					<li>Backend <strong>Admin Panel</strong> &#8211; Data can be used in front end applications with ease.</li>
					<li>A probable <strong>CRM</strong> System &#8211; Can be evolved into a CRM system like <a target="_blank" href="https://www.sugarcrm.com">SugarCRM</a></li>
				</ol><br>

				<h3 class="feature-title">Why LaraAdmin ?</h3><br>
                <ol class="features">
					<li><strong>Philosophy:</strong> Inspired by SugarCRM &amp; based on Advanced <strong>Data Types</strong> like Image, HTML, File, Dropdown, TagInput which makes developers job easy. See more in <a target="_blank" href="http://laraadmin.com/features">features</a></li>
					<li>Superior <strong>CRUD generation</strong> for Modules which generates Migration, Controller, Model and Views with single artisan command and integrates with Routes as as well.</li>
					<li><strong>Form Maker</strong> helper is provided for generating entire form with single function call with module name as single parameter. It also gives you freedom to customise form for every field by providing method to generate single field with parameters for customisations.</li>
					<li><b>Upload Manager </b>manages project files &amp; images which are integrated with your Module fields.</li>
					<li><strong>Menu Manager</strong> creates menu with Modules &amp; Custom Links likes WordPress</li>
					<li><strong>Online Code Editor</strong> allows developers to customise the generated Module Views &amp; Files.</li>
				</ol>
            </div>
        </div>
    </div><!--/ .container -->
</div><!--/ #features -->

<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>Contact Us</h3><br>
            <p>
				Perry Norgarb,<br/>
                Noordhoek,<br/>
                Cape Town
            </p>
			<div class="contact-link"><i class="fa fa-envelope-o"></i> <a href="mailto:perry@smallbizcrm.com">perry@smallbizcrm.com</a></div>
			<div class="contact-link"><i class="fa fa-cube"></i> <a href="http://foodtrees.org">foodtrees.org</a></div>
			<div class="contact-link"><i class="fa fa-building"></i> <a href="http://smallbizcrm.com">smallbizcrm.com</a></div>
        </div>

        <div class="col-lg-7">
            <h3>Keep notified of updates to this exciting project!</h3>
            <p>(We won't spam you, promise!)</p>
          <form accept-charset="UTF-8" action="https://smallbizcrm.infusionsoft.com/app/form/process/7c6d3455468728711ce24d5ddaa4bf02" class="infusion-form" method="POST">
    <input name="inf_form_xid" type="hidden" value="7c6d3455468728711ce24d5ddaa4bf02" />
    <input name="inf_form_name" type="hidden" value="Newsletter Opt-In" />
    <input name="infusionsoft_version" type="hidden" value="1.62.0.37" />
    <div class="form-group row">
        <label class="col-2 col-form-label" for="inf_field_FirstName">First Name *</label>
        <div class="col-10">   <input class="form-control" id="inf_field_FirstName" name="inf_field_FirstName" type="text" /></div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label" for="inf_field_Email">Email *</label>
       <div class="col-10"> <input class="form-control" id="inf_field_Email" name="inf_field_Email" type="text" /></div>
    </div>
    <div class="row">
        <div>
            <img alt="captcha" border="0px" name="captcha" onclick="reloadJcaptcha();" src="https://smallbizcrm.infusionsoft.com/Jcaptcha/img.jsp" title="If you can't read the image, click it to get another one." />
            <script type="text/javascript">function reloadJcaptcha() {var now = new Date();if (document.images) {document.images.captcha.src = 'https://smallbizcrm.infusionsoft.com/Jcaptcha/img.jsp?reload=' + now}}</script>
        </div>
        <div>
            <label for="captcha.typed">Enter the above code:</label>
        </div>
        <div>
            <input class="infusion-field-input-container" id="captcha.typed" name="captcha.typed" type="text" />
        </div>
    </div>
    <div style="padding-top: 10px;" class="form-group row">
        <input type="submit" class="btn btn-primary" value="Submit" />
    </div>
</form>
<script type="text/javascript" src="https://smallbizcrm.infusionsoft.com/app/webTracking/getTrackingCode"></script>
        </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <strong>Copyright &copy; 2016. Powered by <a href="https://dwijitsolutions.com"><b>Dwij IT Solutions</b></a>
        </p>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/la-assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
<script type="text/javascript">





  jQuery(function($){



 var $overlay = $('.overlay'),

     resize = true,

     map;

   var service;

   var marker = [];

   var pos;

   var infowindow;

   var placeLoc





function initialize() {

 /*var mapOptions = {

   zoom: 8,

   center: new google.maps.LatLng(-34.397, 150.644),

   mapTypeId: google.maps.MapTypeId.ROADMAP

 };

 map = new google.maps.Map(document.getElementById('map-canvas'),

     mapOptions);



}*/

var mapOptions = {

   zoom: 13

 };

 map = new google.maps.Map(document.getElementById('map-canvas'),

     mapOptions);



 // Try HTML5 geolocation

 if(navigator.geolocation) {

   navigator.geolocation.getCurrentPosition(function(position) {



           var pos = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);

           $('#findMe').data('pos',pos);

       var request = {

     location:pos,

     radius:10000,

     keyword: 'plants nursery',

 };



 infowindow = new google.maps.InfoWindow();

 var service = new google.maps.places.PlacesService(map);

 service.nearbySearch(request,callback);





       infowindow = new google.maps.InfoWindow({

       map: map,

       position: pos,

       content: 'You Are Here'

     });





     map.setCenter(pos);

   }, function() {

     handleNoGeolocation(true);

   });

 } else {

   // Browser doesn't support Geolocation

   handleNoGeolocation(false);

 }







 function callback(results, status) {

     var markers = [];

 if (status == google.maps.places.PlacesServiceStatus.OK) {

   for (var i = 0; i < results.length; i++) {

     markers.push(createMarker(results[i]));

   }

 }

 $('#findMe').data('markers',markers);

}

}



function createMarker(place) {

 placeLoc = place.geometry.location;

 var marker = new google.maps.Marker({

   map: map,

   position: place.geometry.location,

   icon: {

       path: google.maps.SymbolPath.CIRCLE,

       scale: 8,

       fillColor:'00a14b',

       fillOpacity:0.3,

       fillStroke: '00a14b',

       strokeWeight:4,

       strokeOpacity: 0.7

   },







 });





 google.maps.event.addListener(marker, 'click', function() {

   infowindow.setContent(place.name + '<br>' + place.place_address);

   infowindow.open(map, marker, this);

 });

 return marker;

}



function handleNoGeolocation(errorFlag) {

 if (errorFlag) {

   var content = 'Error: The Geolocation service failed.';

 } else {

   var content = 'Error: Your browser doesn\'t support geolocation.';

 }



 var options = {

   map: map,

   position: new google.maps.LatLng(60, 105),

   content: content

 };



 var infowindow = new google.maps.InfoWindow(options);

 map.setCenter(options.position);

}



google.maps.event.addDomListener(window, 'load', initialize);



$('#show').click(function(){



   $overlay.show();



 if ( resize ){

   google.maps.event.trigger(map, 'resize');

   resize = false;

 }



});



$('.overlay-bg').click(function(){



   $overlay.hide();



});



$( "#findMe" ).click(function() {



 var pos     = $(this).data('pos'),

     markers = $(this).data('markers'),

     closest;



 if(!pos || !markers){

   alert('pos or markers not set yet');return;

 }



 $.each(markers,function(){

   var distance=google.maps.geometry.spherical

                 .computeDistanceBetween(this.getPosition(),pos);

   if(!closest || closest.distance > distance){

     closest={marker:this,

              distance:distance}

   }

 });

 if(closest){

   //closest.marker will be the nearest marker, do something with it

   //here we simply trigger a click, which will open the InfoWindow

   google.maps.event.trigger(closest.marker,'click')

 }

});





});

  </script>
</html>
