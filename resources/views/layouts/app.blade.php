<!DOCTYPE html>
<html dir="ltr" lang="fr-FR">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta name=viewport content="width=device-width, initial-scale=1.0, minimum-scale=1.0 maximum-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Avocat en Droit Social et droit du travail à Paris</title>
    <meta name="description"
        content="Cabinet AP avocats spécialisés en droit social et en droit du travail à Paris, licenciement, harcèlement, contrat de travail, contactez nous pour prendre rdv">
    <link rel="shortcut icon" href="{{ asset('skins/default/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('skins/default/images/favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('skins/default/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('skins/default/css/aos.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('skins/default/css/styleaead.css?1679316610') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>

<body class="Desktop index">
    @include('layouts.inc.header')
    @yield('content')
    @include('layouts.inc.footer')
</body>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700" rel="stylesheet">
<script src="{{ asset('skins/default/js/aos.js') }}"></script>
<script src="{{ asset('skins/default/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('skins/default/js/slick.min.js') }}"></script>
<script src="{{ asset('skins/default/js/custom.js') }}"></script>
<link rel="stylesheet" href="{{ asset('js/leaflet/leaflet.css') }}" />
<script src="{{ asset('js/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('js/map.js') }}"></script>
<script type="text/javascript">
    var Support = 'Desktop';
    $(document).ready(function() {
        // scripts à lancer une fois la page chargée
        initAnalytics('UA-126647933-7');

        //map
        initMap('51 La Canebière, 13001 Marseille, France', 16);
    });
</script>

</html>
