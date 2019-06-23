<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title', 'Painel Educup') &mdash; {{ env('APP_NAME') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/izitoast/css/iziToast.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/codemirror/theme/duotone-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/dropzonejs/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
    <style>
        * {margin: 0; padding: 0;}

        div.lista {
            margin: 0px auto;
        }

        ul.lista {
            list-style-type: none;
            width: 100%;
        }

        a{
            text-decoration: none;
        }

        a h3.lista {
            font: bold 16px/1.5 Helvetica, Verdana, sans-serif;
        }

        a li.lista img {
            float: left;
            margin: 0 15px 0 0;
        }

        a li.lista p {
            font: 200 12px/1.5 Georgia, Times New Roman, serif;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            text-decoration: none;

            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2; /* number of lines to show */
            line-height: 1;        /* fallback */
            max-height: 1;
        }

        a li.lista {
            text-decoration: none;
            padding: 10px;
            overflow: auto;
        }
        a li.lista.active {
            background: #eee;
            cursor: pointer;
        }
        a li.lista:hover {
            background: #eee;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            @include('admin.partials.topnav')
        </nav>
        <div class="main-sidebar">
            @include('admin.partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="main-footer">
            @include('admin.partials.footer')
        </footer>
        </div>
    </div>
    <script src="{{ route('js.dynamic') }}"></script>
    <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>


    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/modules/popper.js')}}"></script>
    <script src="{{ asset('assets/modules/tooltip.js')}}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('assets/modules/moment.min.js')}}"></script>
    <script src="{{ asset('assets/js/tema.js') }}"></script>
    <script src="{{ asset('assets/modules/izitoast/js/iziToast.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets/modules/summernote/summernote.js')}}"></script>
    <script src="{{ asset('assets/modules/codemirror/lib/codemirror.js')}}"></script>
    <script src="{{ asset('assets/modules/codemirror/mode/javascript/javascript.js')}}"></script>
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
    <script src="{{ asset('assets/modules/dropzonejs/dropzone.js')}}"></script>
    <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js')}}"></script>
    <script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/features-post-create.js')}}"></script>
    @yield('scripts')
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @if (isset($msg))
        <script type="text/javascript">
            $(document).ready( function(){

            iziToast.warning({position: 'topRight', title: 'Alerta', message: '{!! $msg !!}'});

            });
        </script>
    @endif
</body>
</html>
