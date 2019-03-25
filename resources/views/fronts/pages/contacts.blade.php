@extends('fronts.layouts.app', ['title' => $node->name])

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="about about_contacts">
        <div class="about__wrapper">
            <h1 class="about__name big-name">{{ $node->name }}</h1>
            <div class="contacts">
                <div class="contacts__wrapper">
                {!! \BlockVisualEditor::render('contacts', '
                <div class="contacts__left my-animate fadeInLeft" data-duration="2" data-delay="1">
                    <span class="line"></span>
                    <p>
                        <svg class="icon-svg icon-svg-contacts-location "><use xlink:href="/its-client/img/sprite.svg#contacts-location"></use></svg>
                        Казань, ул. Адоратского д. 50 а, оф. 112
                    </p>
                    <p>
                        <svg class="icon-svg icon-svg-contacts-phone "><use xlink:href="/its-client/img/sprite.svg#contacts-phone"></use></svg>
                        (843) 239-02-81
                    </p>
                    <p>
                        <svg class="icon-svg icon-svg-contacts-mail "><use xlink:href="/its-client/img/sprite.svg#contacts-mail"></use></svg>
                        info@bazza.su
                    </p>
                    <p>
                        <svg class="icon-svg icon-svg-contacts-day "><use xlink:href="/its-client/img/sprite.svg#contacts-day"></use></svg>
                        пн-птн , с 9:00 до 18:00
                    </p>
                </div>
                ') !!}

    <div class="contacts__right my-animate fadeInRight" data-duration="2" data-delay="1">
        <div class="map" id="google-map" data-page="contacts">
            <div id="google-container"></div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9Qv3PhtLRXw8_cP707YTs8NwHukEnf9k">
</script>

<script>
var latitude = 55.847569,
longitude = 49.153202,
map_zoom = 17;

var style= [
{
"featureType": "all",
"elementType": "all",
"stylers": [
    {
        "gamma": "0.5"
    },
    {
        "saturation": "-89"
    }
]
},
{
"featureType": "administrative",
"elementType": "all",
"stylers": [
    {
        "visibility": "off"
    },
    {
        "color": "#000000"
    },
    {
        "saturation": "-78"
    }
]
},
{
"featureType": "administrative.province",
"elementType": "geometry.fill",
"stylers": [
    {
        "saturation": "-88"
    }
]
},
{
"featureType": "all",
"elementType": "geometry",
"stylers": [
    {
        "saturation": "-31"
    },
    {
        "lightness": "15"
    }
]
},
{
"featureType": "all",
"elementType": "geometry.fill",
"stylers": [
    {
        "saturation": "-99"
    }
]
},
{
"featureType": "poi",
"elementType": "all",
"stylers": [
    {
        "visibility": "on"
    },
    {
        "hue": "#001cff"
    },
    {
        "weight": "0.01"
    }
]
},
{
"featureType": "all",
"elementType": "labels",
"stylers": [
    {
        "saturation": "-63"
    },
    {
        "gamma": "1.14"
    }
]
},
{
"featureType": "all",
"elementType": "labels.text",
"stylers": [
    {
        "gamma": "0.92"
    }
]
},
{
"featureType": "all",
"elementType": "labels.text.fill",
"stylers": [
    {
        "gamma": "1.29"
    },
    {
        "saturation": "-6"
    }
]
},
{
"featureType": "water",
"elementType": "geometry",
"stylers": [
    {
        "hue": "#ff0000"
    },
    {
        "saturation": -100
    },
    {
        "lightness": 100
    },
    {
        "visibility": "on"
    }
]
},
{
"featureType": "road",
"elementType": "geometry",
"stylers": [
    {
        "hue": "#bbbbbb"
    },
    {
        "saturation": -100
    },
    {
        "lightness": 26
    },
    {
        "visibility": "on"
    }
]
},
{
"featureType": "road",
"elementType": "labels",
"stylers": [
    {
        "hue": "#ffffff"
    },
    {
        "saturation": -100
    },
    {
        "lightness": 100
    },
    {
        "visibility": "off"
    }
]
},
{
"featureType": "water",
"elementType": "labels",
"stylers": [
    {
        "hue": "#000000"
    },
    {
        "saturation": -100
    },
    {
        "lightness": -100
    },
    {
        "visibility": "off"
    }
]
}
]


var map_options = {
center: new google.maps.LatLng(latitude, longitude),
zoom: map_zoom,
panControl: false,
zoomControl: false,
mapTypeControl: false,
streetViewControl: false,
mapTypeId: google.maps.MapTypeId.ROADMAP,
scrollwheel: false,
styles: style
}

var map = new google.maps.Map(document.getElementById('google-container'), map_options);

var marker = new google.maps.Marker ({
map: map,
position: {lat: 55.847109, lng: 49.153111},
icon: '/its-client/img/marker.svg'
})
</script>
    @include('fronts.layouts.inc.footer-inner')
@endsection