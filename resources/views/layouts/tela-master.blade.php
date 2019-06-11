<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Educup - Sistema Educacional de Cursos Online</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

<!-- Plugins -->
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">
<link rel="stylesheet" href="{{ asset('css/material-icons.min.css') }}" />



<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">


<style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
</style>
</head>

<body>
        <main role="main" class="inner cover m2">
            @yield('conteudo')
        </main>
<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets/modules/popper.js') }}"></script>
<script src="{{ asset('assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/stisla.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/modules/fullcalendar/core/main.js') }}"></script>
<script src='{{ asset('assets/modules/fullcalendar/daygrid/main.js')}}'></script>
<script src='{{ asset('assets/modules/fullcalendar/interaction/main.js')}}'></script>
<script src='{{ asset('assets/modules/fullcalendar/bootstrap/main.js')}}'></script>
<script src='{{ asset('assets/modules/fullcalendar/core/locales-all.js')}}'></script>
<script src='{{ asset('assets/modules/fullcalendar/core/locales/pt-br.js')}}'></script>
<script src='{{ asset('assets/modules/fullcalendar/moment/main.js')}}'></script>
<script src='{{ asset('assets/modules/fullcalendar/moment-timezone/main.js')}}'></script>




<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>


</body>
</html>
